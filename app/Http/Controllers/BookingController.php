<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class BookingController extends Controller
{
//    public function form($username)
//    {
//        $user = User::where('name', $username)->firstOrFail();
//        $availability = $user->availabilities;
//
//        $slots = [];
//
//        foreach ($availability as $a) {
//            $start = Carbon::parse($a->inicio);
//            $end = Carbon::parse($a->fim);
//
//            while ($start->lt($end)) {
//                $slots[$a->dia_semana][] = $start->format('H:i');
//                $start->addMinutes(30);
//            }
//        }
//
//        return view('booking.form', compact('user', 'slots'));
//    }
    public function form($username)
    {
        $user = User::where('name', $username)->firstOrFail();

        $availability = $user->availabilities;
        $appointments = $user->appointments()
            ->whereDate('start', '>=', now()->startOfWeek())
            ->get();

        $slots = [];

        foreach ($availability as $a) {
            $dia = $a->dia_semana;
            $start = Carbon::parse($a->inicio);
            $end = Carbon::parse($a->fim);

            while ($start->lt($end)) {
                $hora = $start->format('H:i');

                // Verifica se esse horário está livre para a próxima ocorrência do dia
                $proximaData = Carbon::parse("next {$dia} {$hora}");

                $conflito = $appointments->first(function ($appt) use ($proximaData) {
//                    return $proximaData->between($appt->start, $appt->end->subMinute());
                    return $proximaData->between(
                        Carbon::parse($appt->start),
                        Carbon::parse($appt->end)->subMinute()
                    );
                });

                if (!$conflito) {
                    $slots[$dia][] = $hora;
                }

                $start->addMinutes(30);
            }
        }

        return view('booking.form', compact('user', 'slots'));
    }

    public function submit(Request $request, $username)
    {
        $user = User::where('name', $username)->firstOrFail();

        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'dia' => 'required|string',
            'hora' => 'required|string',
        ]);

        // Combinar o próximo dia da semana com a hora selecionada
        $start = Carbon::parse("next {$data['dia']} {$data['hora']}", $user->timezone ?? 'Africa/Maputo');
        $end = $start->copy()->addMinutes(30);

        // Cria evento no Google Calendar
        $event = Event::create([
            'name' => "Reunião com {$data['nome']}",
            'startDateTime' => $start,
            'endDateTime' => $end,
            'description' => "Cliente: {$data['nome']}\nEmail: {$data['email']}",
        ]);

        // Guarda localmente
        Appointment::create([
            'user_id' => $user->id,
            'start' => $start,
            'end' => $end,
            'meeting_link' => $event->htmlLink ?? '',
            'event_id' => $event->id,
        ]);

        return redirect()->back()->with('success', 'Reunião marcada com sucesso!');
    }
}

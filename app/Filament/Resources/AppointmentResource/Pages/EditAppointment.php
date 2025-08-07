<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Resources\Pages\EditRecord;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class EditAppointment extends EditRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function afterSave(): void
    {
        if ($this->record->event_id) {
            // Atualiza o evento existente
            $event = Event::find($this->record->event_id);

            if ($event) {
                $event->name = 'Reunião com ' . $this->record->user->name;
                $event->startDateTime = Carbon::parse($this->record->start);
                $event->endDateTime = Carbon::parse($this->record->end);
                $event->description = 'Link: ' . $this->record->meeting_link;
                $event->save();
            }
        }
    }
}

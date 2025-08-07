<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Resources\Pages\CreateRecord;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CreateAppointment extends CreateRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function afterCreate(): void
    {
        $event = Event::create([
            'name' => 'Reunião com ' . $this->record->user->name,
            'startDateTime' => Carbon::parse($this->record->start),
            'endDateTime' => Carbon::parse($this->record->end),
            'description' => 'Link: ' . $this->record->meeting_link,
        ]);

        $this->record->update([
            'event_id' => $event->id,
        ]);
    }
}

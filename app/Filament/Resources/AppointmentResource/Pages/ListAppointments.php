<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Spatie\GoogleCalendar\Event;
use Filament\Actions\DeleteAction;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    protected function getTableActions(): array
    {
        return [
            DeleteAction::make()
                ->after(function ($record) {
                    if ($record->event_id) {
                        $event = Event::find($record->event_id);
                        if ($event) {
                            $event->delete();
                        }
                    }
                }),
        ];
    }

    protected function canCreate(): bool
    {
        return true;
    }
}

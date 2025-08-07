<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use App\Models\User;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\{Select, DateTimePicker, TextInput};
use Filament\Tables\Columns\{TextColumn};
use Filament\Resources\Form;
use Filament\Resources\Table;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Agendamentos';
    protected static ?string $pluralLabel = 'Agendamentos';
    protected static ?string $modelLabel = 'Agendamento';

    protected static ?string $navigationGroup = 'Agendamentos';


    public static function form(Form|Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('user_id')
                ->label('Utilizador')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

            DateTimePicker::make('start')
                ->label('Início')
                ->required(),

            DateTimePicker::make('end')
                ->label('Fim')
                ->required(),

            TextInput::make('meeting_link')
                ->label('Link da Reunião')
                ->url()
                ->required(),
        ]);
    }

    public static function table(Table|Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('user.name')
                ->label('Utilizador')
                ->searchable()
                ->sortable(),

            TextColumn::make('start')
                ->label('Início')
                ->dateTime('d/m/Y H:i')
                ->sortable(),

            TextColumn::make('end')
                ->label('Fim')
                ->dateTime('d/m/Y H:i')
                ->sortable(),

            TextColumn::make('meeting_link')
                ->label('Reunião')
                ->url(fn ($record) => $record->meeting_link, true)
                ->openUrlInNewTab()
                ->limit(30),
        ])->defaultSort('created_at', 'desc')->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}

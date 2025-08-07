<?php

namespace App\Filament\Resources;

use App\Models\Lead;
use Filament\Forms;
use Filament\Forms\Components\{TextInput, Select, Textarea};
use Filament\Tables;
use Filament\Tables\Columns\{TextColumn, BadgeColumn};
use Filament\Tables\Filters\SelectFilter;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\LeadResource\Pages;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Leads';
    protected static ?string $pluralLabel = 'Leads';
    protected static ?string $modelLabel = 'Lead';
    protected static ?int $navigationSort = 1;

    public static function form(Form|Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nome')
                ->required()
                ->maxLength(255)
                ->label('Nome'),

            TextInput::make('email')
                ->email()
                ->maxLength(255)
                ->label('Email'),

            TextInput::make('telefone')
                ->maxLength(20)
                ->label('Telefone'),

            Select::make('status')
                ->label('Estado')
                ->options([
                    'novo' => 'Novo',
                    'em_contacto' => 'Em Contacto',
                    'convertido' => 'Convertido',
                    'perdido' => 'Perdido',
                ])
                ->default('novo'),

            Textarea::make('notas')
                ->label('Notas')
                ->rows(4),
        ]);
    }

    public static function table(Table|Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->sortable(),

                TextColumn::make('telefone')
                    ->label('Telefone'),

                BadgeColumn::make('status')
                    ->label('Estado')
                    ->colors([
                        'primary' => 'novo',
                        'warning' => 'em_contacto',
                        'success' => 'convertido',
                        'danger' => 'perdido',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'novo' => 'Novo',
                        'em_contacto' => 'Em Contacto',
                        'convertido' => 'Convertido',
                        'perdido' => 'Perdido',
                        default => ucfirst($state),
                    }),

                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Estado')
                    ->options([
                        'novo' => 'Novo',
                        'em_contacto' => 'Em Contacto',
                        'convertido' => 'Convertido',
                        'perdido' => 'Perdido',
                    ]),
            ])
            ->defaultSort('created_at', 'desc')->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class LeadOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '60s'; // Atualiza automaticamente

    protected function getCards(): array
    {
        return [
            Card::make('Total de Leads', Lead::count()),

            Card::make('Leads Novos', Lead::where('status', 'novo')->count())
                ->description('Ainda não contactados')
                ->color('primary'),

            Card::make('Em Contacto', Lead::where('status', 'em_contacto')->count())
                ->color('warning'),

            Card::make('Convertidos', Lead::where('status', 'convertido')->count())
                ->color('success'),

            Card::make('Perdidos', Lead::where('status', 'perdido')->count())
                ->color('danger'),
        ];
    }
}

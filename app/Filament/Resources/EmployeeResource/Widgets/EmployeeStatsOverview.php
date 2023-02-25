<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

// use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
        Card::make('All Employees', Employee::all()->count())
        ];
    }
}

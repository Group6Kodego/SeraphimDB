<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        
        $frontOffice = Department::where('name', 'Front Office')->withCount('employees')->first();
        $houseKeeping = Department::where('name', 'HouseKeeping')->withCount('employees')->first();
        $food = Department::where('name', 'Food & Beverage Service')->withCount('employees')->first();
        $kitchen = Department::where('name', 'Kitchen')->withCount('employees')->first();
        $engineer = Department::where('name', 'Engineering/Maintenance')->withCount('employees')->first();
        $accounts = Department::where('name', 'Accounts')->withCount('employees')->first();
        $security = Department::where('name', 'Security')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            
            Card::make('Front Office Employees', $frontOffice ? $frontOffice->employees_count : 0),
            Card::make('Accounts Employees', $accounts ? $accounts->employees_count : 0),
            Card::make('Kitchen Employees', $kitchen ? $kitchen->employees_count : 0),
            Card::make('House Keeping Employees', $houseKeeping ? $accounts->employees_count : 0),
            Card::make('Food & Beverages Employees', $food ? $food->employees_count : 0),
            Card::make('Engineering/Maintenance Employees', $engineer ? $engineer->employees_count : 0),
            Card::make('Security Employees', $security ? $security->employees_count : 0),
        ];
    }
}

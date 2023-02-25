<?php
 
namespace App\Filament\Pages;
 
use Filament\Pages\Dashboard as BasePage;
 
class Dashboard extends BasePage
{
  protected int | string | array $columnSpan = [
    'md' => 2,
    'xl' => 3,
];
}
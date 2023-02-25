<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Filament\Resources\EmployeeResource\Widgets\EmployeeStatsOverview;

use App\Models\Employee;

use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Employee Manager';
    public static function form(Form $form): Form
    {
        return $form
         ->schema([
            Grid::make(1)
            ->schema([
                Tabs::make('Heading')
                ->tabs([
            Tabs\Tab::make('General Information')
            ->schema([
                        Grid::make(3)
                        ->schema([
                            
                            // FileUpload::make('image')->image(),
            Select::make('department_id',)
                ->relationship('department','name')->required(),
            TextInput::make('employee_id')->required()->maxLength(255),
            TextInput::make('first_name')->required()->maxLength(255),
            TextInput::make('middle_name')->required()->maxLength(255),
            TextInput::make('last_name')->required()->maxLength(255),
            DatePicker::make('birth_date')->required(),
            
            TextInput::make('gender')->required()->maxLength(255),
            TextInput::make('phone')->required()->maxLength(255),
            TextInput::make('nationality')->required()->maxLength(255),
            TextInput::make('address')->required()->maxLength(255),
            TextInput::make('zip_code')->required()->maxLength(5),
            TextInput::make('tin_id')->required()->maxLength(255),
            TextInput::make('sss_id')->required()->maxLength(255),
            TextInput::make('philhealth_id')->required()->maxLength(255),
            TextInput::make('pagibig_id')->required()->maxLength(255),
            DatePicker::make('date_hired')->required(),
                        ]) ]),
            Tabs\Tab::make('Family Information')
            ->schema([
                        Grid::make(2)
                        ->schema([
            TextInput::make('spouse/husband_fullname')->maxLength(255),
            DatePicker::make('birthdate'),
            Grid::make(3)
            ->schema([
            TextInput::make('Children_1')->maxLength(255),
            Select::make('gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('birthdate'),
            TextInput::make('Children_2')->maxLength(255),
            Select::make('gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('birthdate'),
            TextInput::make('Children_3')->maxLength(255),
            Select::make('gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('birthdate'),
            TextInput::make('Children_4')->maxLength(255),
            Select::make('gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('birthdate'),
            TextInput::make('Children_5')->maxLength(255),
            Select::make('gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('birthdate'),
            ]),
            TextInput::make('father`s_fullname')->maxLength(255),
            DatePicker::make('birth_date'),
            TextInput::make('mother`s_fullname')->maxLength(255),
            DatePicker::make('birth_date'),
                        ]) ]),
                    Tabs\Tab::make('Educational Background')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    TextInput::make('HighSchool_Name')->maxLength(255),
                                    TextInput::make('HighSchool_Address')->maxLength(255),
                                    Select::make('Graduated?')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('Year_Start')->maxLength(255),
                                    TextInput::make('Year_End')->maxLength(255),
                                    TextInput::make('Awards/Honor')->maxLength(255),

                                    TextInput::make('SeniorHighSchool_Name')->maxLength(255),
                                    TextInput::make('SeniorHighSchool_Address')->maxLength(255),
                                    Select::make('Graduated?')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('Year_Start')->maxLength(255),
                                    TextInput::make('Year_End')->maxLength(255),
                                    TextInput::make('Awards/Honor')->maxLength(255),

                                    TextInput::make('CollegeUniversity_Name')->maxLength(255),
                                    TextInput::make('CollegeUniversity_Address')->maxLength(255),
                                    Select::make('Graduated?')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('Year_Start')->maxLength(255),
                                    TextInput::make('Year_End')->maxLength(255),
                                    TextInput::make('Awards/Honor')->maxLength(255),
                                ])
                        ]),
                ]) 
                    ])
                    ]);
                    
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('first_name')->sortable()->searchable(),
                TextColumn::make('last_name')->sortable()->searchable(),
                TextColumn::make('department.name')->sortable(),
                TextColumn::make('date_hired')->date(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                SelectFilter::make('department')->relationship('department', 'name'),
                // SelectFilter::make('country')->relationship('country', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getWidgets(): array
    {
        return [
           EmployeeStatsOverview::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }    
}

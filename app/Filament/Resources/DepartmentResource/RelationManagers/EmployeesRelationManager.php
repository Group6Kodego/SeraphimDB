<?php

namespace App\Filament\Resources\DepartmentResource\RelationManagers;


use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeesRelationManager extends RelationManager
{
    protected static string $relationship = 'employees';

    protected static ?string $recordTitleAttribute = 'first_name';

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
            // FileUpload::make('attachment')
            // ->disk('s3')
            // ->directory('form-attachments')
            // ->visibility('private'),

            Select::make('department_id',)
                ->relationship('department','name')->required(),
            TextInput::make('employee_id')->required()->maxLength(255),
            DatePicker::make('date_hired')->required(),
            TextInput::make('first_name')->required()->maxLength(255),
            TextInput::make('middle_name')->required()->maxLength(255),
            TextInput::make('last_name')->required()->maxLength(255),
            DatePicker::make('birth_date')->required(),
            Select::make('gender')
                ->required()
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            TextInput::make('phone')->required()->maxLength(255),
            TextInput::make('nationality')->required()->maxLength(255),
            TextInput::make('address')->required()->maxLength(255),
            TextInput::make('zip_code')->required()->maxLength(5),
            TextInput::make('tin_id')->required()->maxLength(255)->placeholder('000-000-000-000')
            ->mask(fn (TextInput\Mask $mask) => $mask->pattern('000-000-000-000')),
            TextInput::make('sss_id')->required()->maxLength(255)->placeholder('0000-0000000-0')
            ->mask(fn (TextInput\Mask $mask) => $mask->pattern('0000-0000000-0')),
            TextInput::make('philhealth_id')->required()->maxLength(255)->placeholder('0-00000000-0')
            ->mask(fn (TextInput\Mask $mask) => $mask->pattern('0-00000000-0')),
            TextInput::make('pagibig_id')->required()->maxLength(255)->placeholder('0000-0000-0000')
            ->mask(fn (TextInput\Mask $mask) => $mask->pattern('0000-0000-000')),
                        ]) ]),
            Tabs\Tab::make('Family Information')
            ->schema([
                        Grid::make(2)
                        ->schema([
            Card::make()
                ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('spouse')->maxLength(255)->label('Spouse Full Name'),
                        DatePicker::make('spouseBirthdate')->label('Birthdate'),
                    ])
                ]),
            
                Card::make()
                ->schema([
                    Grid::make(3)
            ->schema([
            TextInput::make('child_1')->maxLength(255)->label('Child 1 Name'),
            Select::make('child_1gender')
            ->label('Gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
            DatePicker::make('child_1birthdate')
                ->label('Birth Date'),
            ]),
            ]),
            Card::make()
                ->schema([
                    Grid::make(3)
            ->schema([
                TextInput::make('child_2')->maxLength(255)->label('Child 2 Name'),
                Select::make('child_2gender')
                ->label('Gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ]),
                DatePicker::make('child_2birthdate')
                    ->label('Birth Date'),
            ]),
            ]),
            Card::make()
            ->schema([
                    Grid::make(3)
                    ->schema([
                        TextInput::make('child_3')->maxLength(255)->label('Child 3 Name'),
                        Select::make('child_3gender')
                        ->label('Gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                            ]),
                        DatePicker::make('child_3birthdate')
                            ->label('Birth Date'),
            ]),
            ]),
            Card::make()
                ->schema([
                    Grid::make(3)
            ->schema([
                TextInput::make('child_4')->maxLength(255)->label('Child 4 Name'),
                Select::make('child_4gender')
                ->label('Gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ]),
                DatePicker::make('child_4birthdate')
                    ->label('Birth Date'),
            ]),
            ]),
            Card::make()
                ->schema([
                    Grid::make(3)
            ->schema([
                TextInput::make('child_5')->maxLength(255)->label('Child 5 Name'),
                Select::make('child_5gender')
                ->label('Gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ]),
                DatePicker::make('child_5birthdate')
                    ->label('Birth Date'),
            ]),
        ]),
        Fieldset::make('Parents')
    ->schema([
        TextInput::make('fathers_name')->label('Father`s Full Name')->maxLength(255),
            DatePicker::make('fathersBirthdate')->label('Birth Date'),
            TextInput::make('mothers_name')->label('Mother`s Full Name')->maxLength(255),
            DatePicker::make('mothersBirthdate')->label('Birth Date'),
    ])
            
                        ]) ]),
                    Tabs\Tab::make('Educational Background')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    Fieldset::make('Highschool')
                                        ->schema([
                                            Grid::make(3)
                                                ->schema([
                                    TextInput::make('HighSchool_Name')->maxLength(255),
                                    TextInput::make('HighSchool_Address')->maxLength(255),
                                    Select::make('hsYear')->label('Graduated')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('hs_Start')->maxLength(255)->label('Year Start'),
                                    TextInput::make('hs_End')->maxLength(255)->label('Year End'),
                                    TextInput::make('hsAwards')->maxLength(255)->label('Awards/Honor')
                                    ])]),
                                    Fieldset::make('Senior Highschool')
                                        ->schema([
                                            Grid::make(3)
                                                ->schema([
                                    TextInput::make('seniorHighSchool_Name')->maxLength(255),
                                    TextInput::make('seniorHighSchool_Address')->maxLength(255),
                                    Select::make('shsYear')->label('Graduated')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('shs_Start')->maxLength(255)->label('Year Start'),
                                    TextInput::make('shs_End')->maxLength(255)->label('Year End'),
                                    TextInput::make('shsAwards')->maxLength(255)->label('Awards/Honor'),
                                    ])]),
                                    Fieldset::make('College')
                                        ->schema([
                                            Grid::make(3)
                                                ->schema([
                                    TextInput::make('CollegeUniversity_Name')->maxLength(255),
                                    TextInput::make('CollegeUniversity_Address')->maxLength(255),
                                    Select::make('collegeYear')->label('Graduated')
                                        ->options([
                                            'Yes' => 'Yes',
                                            'No' => 'No',
                                        ]),
                                    TextInput::make('college_Start')->maxLength(255)->label('Year Start'),
                                    TextInput::make('college_End')->maxLength(255)->label('Year End'),
                                    TextInput::make('collegeAwards')->maxLength(255)->label('Awards/Honor'),
                                    ])]),
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
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventBookingResource\Pages;
use App\Filament\Resources\EventBookingResource\RelationManagers;
use App\Models\EventBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Column;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TimeColumn;
use Filament\Tables\Columns\DateColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventBookingResource extends Resource
{
    protected static ?string $model = EventBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Name'),
            Forms\Components\TextInput::make('email')
                ->required()
                ->maxLength(255)
                ->label('Email'),
            Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(20)
                ->label('Phone'),
            Forms\Components\TextInput::make('event_name')
                ->required()
                ->maxLength(255)
                ->label('Event Name'),
            Forms\Components\DatePicker::make('event_date')
                ->required()
                ->label('Event Date'),
            Forms\Components\TimePicker::make('start_time')
                ->required()
                ->label('Start Time'),
            Forms\Components\TimePicker::make('end_time')
                ->required()
                ->label('End Time'),
            Forms\Components\TextInput::make('num_attendees')
                ->required()
                ->integer()
                ->label('Attendees'),
            Forms\Components\Textarea::make('special_requirements')
                ->maxLength(1000)
                ->label('Special Request'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_name')
                    ->label('Event Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Event Date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Start Time')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_time')
                    ->label('End Time')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('num_attendees')
                    ->label('Attendees')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('special_requirements')
                    ->label('Special Requests')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventBookings::route('/'),
            'create' => Pages\CreateEventBooking::route('/create'),
            'edit' => Pages\EditEventBooking::route('/{record}/edit'),
        ];
    }
}

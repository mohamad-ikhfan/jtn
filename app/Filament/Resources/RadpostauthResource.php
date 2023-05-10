<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadpostauthResource\Pages;
use App\Filament\Resources\RadpostauthResource\RelationManagers;
use App\Models\Radpostauth;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadpostauthResource extends Resource
{
    protected static ?string $model = Radpostauth::class;

    protected static ?string $navigationGroup = 'Radius';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             // Forms\Components\TextInput::make('username')
    //             //     ->required()
    //             //     ->maxLength(64),
    //             // Forms\Components\TextInput::make('pass')
    //             //     ->required()
    //             //     ->maxLength(64),
    //             // Forms\Components\TextInput::make('reply')
    //             //     ->required()
    //             //     ->maxLength(32),
    //             // Forms\Components\DateTimePicker::make('authdate')
    //             //     ->required(),
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('pass')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('reply')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('authdate')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRadpostauths::route('/'),
        ];
    }
}
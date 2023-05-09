<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NasResource\Pages;
use App\Filament\Resources\NasResource\RelationManagers;
use App\Models\Nas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NasResource extends Resource
{
    protected static ?string $model = Nas::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Required')
                    ->schema([
                        Forms\Components\TextInput::make('nasname')
                            ->label('Server IP')
                            ->placeholder('0.0.0.0/24')
                            ->required(),

                        Forms\Components\TextInput::make('type')
                            ->default('other')
                            ->required(),

                        Forms\Components\TextInput::make('ports')
                            ->default(0)
                            ->required(),

                        Forms\Components\TextInput::make('secret')
                            ->placeholder('Use a strong secret')
                            ->required(),
                    ]),
                Forms\Components\Fieldset::make('Optional')
                    ->schema([
                        Forms\Components\TextInput::make('shortname'),

                        Forms\Components\TextInput::make('server'),

                        Forms\Components\TextInput::make('comunity'),

                        Forms\Components\TextInput::make('description')

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nasname')
                    ->label('Server IP')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('shortname')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('type')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('ports')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('secret')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('server')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('community')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageNas::route('/'),
        ];
    }
}
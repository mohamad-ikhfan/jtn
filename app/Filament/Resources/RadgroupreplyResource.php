<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadgroupreplyResource\Pages;
use App\Filament\Resources\RadgroupreplyResource\RelationManagers;
use App\Models\Radgroupreply;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadgroupreplyResource extends Resource
{
    protected static ?string $model = Radgroupreply::class;

    protected static ?string $navigationGroup = 'Radius';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('groupname')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(64),

                Forms\Components\TextInput::make('attribute')
                    ->required()
                    ->maxLength(64),

                Forms\Components\Select::make('op')
                    ->options([
                        ':=' => ':=',
                        '=' => '=',
                        '==' => '==',
                        '+=' => '+=',
                        '!=' => '!=',
                        '>' => '>',
                        '>=' => '>=',
                        '<' => '<',
                        '<=' => '<=',
                        '=~' => '=~',
                        '!~' => '!~',
                        '=*' => '=*',
                        '!*' => '!*',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('value')
                    ->required()
                    ->maxLength(253),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('groupname')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('attribute')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('op')
                    ->sortable(),

                Tables\Columns\TextColumn::make('value')
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
            'index' => Pages\ManageRadgroupreplies::route('/'),
        ];
    }
}
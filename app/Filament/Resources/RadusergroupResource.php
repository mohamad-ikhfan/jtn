<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadusergroupResource\Pages;
use App\Filament\Resources\RadusergroupResource\RelationManagers;
use App\Models\Radusergroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadusergroupResource extends Resource
{
    protected static ?string $model = Radusergroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('groupname')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('priority')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('groupname'),
                Tables\Columns\TextColumn::make('priority'),
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
            'index' => Pages\ManageRadusergroups::route('/'),
        ];
    }    
}

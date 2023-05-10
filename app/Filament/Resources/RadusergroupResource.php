<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadusergroupResource\Pages;
use App\Filament\Resources\RadusergroupResource\RelationManagers;
use App\Models\Radcheck;
use App\Models\Radgroupreply;
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

    protected static ?string $navigationGroup = 'Radius';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('username')
                    ->options(Radcheck::all()->pluck('username', 'username'))
                    ->searchable()
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('groupname')
                    ->options(Radgroupreply::all()->pluck('groupname', 'groupname'))
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('priority')
                    ->required()
                    ->default(0)
                    ->integer(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('groupname')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('priority')
                    ->sortable(),

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
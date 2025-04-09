<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VidioResource\Pages;
use App\Filament\Resources\VidioResource\RelationManagers;
use App\Models\Vidio;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VidioResource extends Resource
{
    protected static ?string $model = Vidio::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Vidio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                TextInput::make('link')
                    ->helperText("Input link pada attribute src= saat setelah mengcopy embed youtube")
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Toggle::make('status')
                    ->label('Publish Now')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('link'),
                ToggleColumn::make('status')
                    ->label('Published'),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d-m-Y H:m:s'),
            ])
            ->filters([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVidios::route('/'),
            // 'create' => Pages\CreateVidio::route('/create'),
            // 'edit' => Pages\EditVidio::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonyResource\Pages;
use App\Filament\Resources\TestimonyResource\RelationManagers;
use App\Models\Testimony;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonyResource extends Resource
{
    protected static ?string $model = Testimony::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';
    protected static ?string $navigationLabel = 'Testimoni';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->directory('products')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('title')
                    ->label('Nama')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                TextInput::make('link')
                    ->label('Pekerjaan')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                RichEditor::make('desc')
                    ->label('Testimoni')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'redo',
                        'undo',
                    ])
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(65535),
                Toggle::make('status')
                    ->label('Publish Now')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Nama'),
                TextColumn::make('link')->label('Pekerjaan'),
                ToggleColumn::make('status')
                    ->label('Published'),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d-m-Y H:m:s'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
                ForceDeleteBulkAction::make(),
                RestoreBulkAction::make(),
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
            'index' => Pages\ListTestimonies::route('/'),
            // 'create' => Pages\CreateTestimony::route('/create'),
            // 'edit' => Pages\EditTestimony::route('/{record}/edit'),
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

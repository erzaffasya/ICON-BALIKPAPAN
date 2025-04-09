<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentDetailResource\Pages;
use App\Filament\Resources\PaymentDetailResource\RelationManagers;
use App\Models\Payment;
use App\Models\PaymentDetail;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentDetailResource extends Resource
{
    protected static ?string $model = PaymentDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Deskripsi Pembayaran';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('payment_id')
                            ->label('Daftar Pembayaran')
                            ->options(Payment::all()
                                ->pluck('name', 'id'))
                            ->searchable(),
                        RichEditor::make('description')->label('Deskripsi')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('payment.name')->label('Pembayaran'),
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
            'index' => Pages\ListPaymentDetails::route('/'),
            // 'create' => Pages\CreatePaymentDetail::route('/create'),
            // 'edit' => Pages\EditPaymentDetail::route('/{record}/edit'),
        ];
    }
}

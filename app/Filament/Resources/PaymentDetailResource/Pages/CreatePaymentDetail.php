<?php

namespace App\Filament\Resources\PaymentDetailResource\Pages;

use App\Filament\Resources\PaymentDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentDetail extends CreateRecord
{
    protected static string $resource = PaymentDetailResource::class;
}

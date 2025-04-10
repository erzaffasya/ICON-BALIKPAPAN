<?php
namespace App\Enums;

enum ProductType: int
{
    case Paket = 1;
    case AddOns = 2;
    case PaketPromo = 3;

    public function label(): string
    {
        return match ($this) {
            self::Paket => 'Paket Internet',
            self::AddOns => 'Add Ons',
            self::PaketPromo => 'Paket Promo Internet',
        };
    }
}

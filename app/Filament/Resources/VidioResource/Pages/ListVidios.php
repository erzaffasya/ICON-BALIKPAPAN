<?php

namespace App\Filament\Resources\VidioResource\Pages;

use App\Filament\Resources\VidioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVidios extends ListRecords
{
    protected static string $resource = VidioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

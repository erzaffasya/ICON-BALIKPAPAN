<?php

namespace App\Filament\Resources\VidioResource\Pages;

use App\Filament\Resources\VidioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVidio extends EditRecord
{
    protected static string $resource = VidioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

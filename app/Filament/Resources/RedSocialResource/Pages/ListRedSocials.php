<?php

namespace App\Filament\Resources\RedSocialResource\Pages;

use App\Filament\Resources\RedSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRedSocials extends ListRecords
{
    protected static string $resource = RedSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

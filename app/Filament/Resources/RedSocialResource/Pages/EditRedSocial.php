<?php

namespace App\Filament\Resources\RedSocialResource\Pages;

use App\Filament\Resources\RedSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRedSocial extends EditRecord
{
    protected static string $resource = RedSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

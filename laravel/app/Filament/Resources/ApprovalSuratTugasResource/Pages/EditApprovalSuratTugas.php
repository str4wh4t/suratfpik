<?php

namespace App\Filament\Resources\ApprovalSuratTugasResource\Pages;

use App\Filament\Resources\ApprovalSuratTugasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApprovalSuratTugas extends EditRecord
{
    protected static string $resource = ApprovalSuratTugasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

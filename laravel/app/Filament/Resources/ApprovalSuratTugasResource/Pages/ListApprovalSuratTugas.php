<?php

namespace App\Filament\Resources\ApprovalSuratTugasResource\Pages;

use App\Filament\Resources\ApprovalSuratTugasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApprovalSuratTugas extends ListRecords
{
    protected static string $resource = ApprovalSuratTugasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

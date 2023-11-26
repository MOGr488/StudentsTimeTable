<?php

namespace App\Filament\Resources\PdfFileResource\Pages;

use App\Filament\Resources\PdfFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdfFiles extends ListRecords
{
    protected static string $resource = PdfFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

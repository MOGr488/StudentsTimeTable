<?php

namespace App\Filament\Resources\PdfFileResource\Pages;

use App\Filament\Resources\PdfFileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePdfFile extends CreateRecord
{
    protected static string $resource = PdfFileResource::class;
}

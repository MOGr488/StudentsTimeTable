<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PdfFileResource\Pages;
use App\Filament\Resources\PdfFileResource\RelationManagers;
use App\Models\PdfFile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class PdfFileResource extends Resource
{
    protected static ?string $model = PdfFile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->options(\App\Models\User::pluck('name', 'id')->toArray())->required(),
                FileUpload::make('name')->required()->acceptedFileTypes(['application/pdf']),
                Forms\Components\TextInput::make('page_count')->disabled(),
                Forms\Components\TextInput::make('size')->disabled(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPdfFiles::route('/'),
            'create' => Pages\CreatePdfFile::route('/create'),
            'edit' => Pages\EditPdfFile::route('/{record}/edit'),
        ];
    }
}

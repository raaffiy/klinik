<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use App\Filament\Resources\ProductsResource;
use App\Models\Products;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProducts extends EditRecord
{
    protected static string $resource = ProductsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Products $recordS) {
                    foreach ($recordS as $record) {
                        $fields = ['gambar_obat', 'gambar_obat_2'];
                        foreach ($fields as $field) {
                            if ($record->$field) {
                                Storage::disk('public')->delete($record->$field);
                            }
                        }
                    }
                }
            )
        ];
    }
}

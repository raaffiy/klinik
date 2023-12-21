<?php

namespace App\Filament\Resources\CoffeeResource\Pages;

use App\Filament\Resources\CoffeeResource;
use App\Models\Coffee;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditCoffee extends EditRecord
{
    protected static string $resource = CoffeeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Coffee $record) {
                    if ($record->image_product) {
                        Storage::disk('public')->delete($record->image_product);
                    }
                }
            )
        ];
    }
}

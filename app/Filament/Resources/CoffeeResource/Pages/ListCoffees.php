<?php

namespace App\Filament\Resources\CoffeeResource\Pages;

use App\Filament\Resources\CoffeeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoffees extends ListRecords
{
    protected static string $resource = CoffeeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

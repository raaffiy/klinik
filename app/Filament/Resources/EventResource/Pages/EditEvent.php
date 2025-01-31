<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Models\Event;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Event $recordS) {
                    foreach ($recordS as $record) {
                        $fields = ['gambar_event', 'gambar_event_2', 'gambar_event_3'];
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

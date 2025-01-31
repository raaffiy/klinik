<?php

namespace App\Filament\Resources\AchievementResource\Pages;

use App\Filament\Resources\AchievementResource;
use App\Models\Achievement;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditAchievement extends EditRecord
{
    protected static string $resource = AchievementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Achievement $recordS) {
                    foreach ($recordS as $record) {
                        $fields = ['gambar_lomba', 'gambar_lomba_2', 'gambar_lomba_3'];
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

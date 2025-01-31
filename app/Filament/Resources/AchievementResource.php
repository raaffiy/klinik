<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        // Column nama_lomba
                        TextInput::make('nama_lomba')->required()->columnSpanFull(),

                        // Column tanggal_lomba
                        TextInput::make('tanggal_lomba')->required()->columnSpanFull(),

                        // Column gambar_lomba
                        FileUpload::make('gambar_lomba')->required()->image()->disk('public')->columnSpanFull(),

                        // Column gambar_lomba_2
                        FileUpload::make('gambar_lomba_2')->required()->image()->disk('public')->columnSpan(1),

                        // Column gambar_lomba_3
                        FileUpload::make('gambar_lomba_3')->required()->image()->disk('public')->columnSpan(1),

                        // Column tingkat_lomba
                        Select::make('tingkat_lomba')
                            ->options([
                                'Internasional',
                                'Nasional',
                                'Provinsi',
                                'Kabupaten/Kota',
                            ])->required()->columnSpanFull(),

                        // Column lokasi_lomba
                        TextInput::make('lokasi_lomba')->required()->columnSpanFull(),

                        // Column deskripsi_lomba
                        RichEditor::make('deskripsi_lomba')
                            ->required()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->columnSpanFull(),

                        // Column nama_peserta_lomba
                        RichEditor::make('nama_peserta_lomba')
                            ->required()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->columnSpanFull(),

                        // Column kutipan_pesan
                        RichEditor::make('kutipan_pesan')
                            ->required()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->columnSpanFull(),

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                // structure database products (obat-obatan)
                TextColumn::make('nama_lomba')->sortable()->searchable(),
                ImageColumn::make('gambar_lomba'),
                TextColumn::make('tanggal_lomba')->sortable()->searchable(),
                TextColumn::make('tingkat_lomba')->sortable()->searchable(),
                TextColumn::make('lokasi_lomba')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        $fields = ['gambar_lomba', 'gambar_lomba_2', 'gambar_lomba_3'];
                        foreach ($fields as $field) {
                            if ($record->$field) {
                                Storage::disk('public')->delete($record->$field);
                            }
                        }
                    }
                }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        $fields = ['gambar_lomba', 'gambar_lomba_2', 'gambar_lomba_3'];
                        foreach ($fields as $field) {
                            if ($record->$field) {
                                Storage::disk('public')->delete($record->$field);
                            }
                        }
                    }
                }),
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }    
}

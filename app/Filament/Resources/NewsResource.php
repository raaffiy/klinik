<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
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
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        // Column nama_berita
                        TextInput::make('nama_berita')->required()->columnSpanFull(),

                        // Column gambar_berita
                        FileUpload::make('gambar_berita')->required()->image()->disk('public')->columnSpan(1),

                        // Column gambar_berita_2
                        FileUpload::make('gambar_berita_2')->image()->disk('public')->columnSpan(1),

                        // Column kategori_berita & tags_berita
                        Select::make('kategori_berita')
                            ->options([
                                'Kesehatan Umum' => 'Kesehatan Umum',
                                'Gizi dan Nutrisi' => 'Gizi dan Nutrisi',
                                'Penyakit dan Pencegahan' => 'Penyakit dan Pencegahan',
                                'Kesehatan Mental' => 'Kesehatan Mental',
                                'Olahraga dan Kebugaran' => 'Olahraga dan Kebugaran',
                                'Kesehatan Anak' => 'Kesehatan Anak',
                                'Kesehatan Lansia' => 'Kesehatan Lansia'
                            ])->required()->columnSpan(1),

                        Select::make('tags_berita')
                            ->options([
                                'Tips Kesehatan' => 'Tips Kesehatan',
                                'Edukasi Kesehatan' => 'Edukasi Kesehatan',
                                'Trending Kesehatan' => 'Trending Kesehatan',
                                'Panduan Hidup Sehat' => 'Panduan Hidup Sehat',
                                'Rekomendasi Diet' => 'Rekomendasi Diet'
                            ])->multiple()->required()->columnSpan(1),

                        // Column isi_berita
                        RichEditor::make('isi_berita')
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

                        // Column isi_berita_2
                        RichEditor::make('isi_berita_2')
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
                TextColumn::make('nama_berita')->sortable()->searchable(),
                ImageColumn::make('gambar_berita'),
                TextColumn::make('kategori_berita')->sortable()->searchable(),
            ])
            ->filters([
                // 
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(
                    function (News $record) {
                        if ($record->gambar_berita) {
                            Storage::disk('public')->delete($record->gambar_berita);
                        }
                        if ($record->gambar_berita_2) {
                            Storage::disk('public')->delete($record->gambar_berita_2);
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    function (Collection $records) {
                        foreach ($records as $record) {
                            if ($record->gambar_berita) {
                                Storage::disk('public')->delete($record->gambar_berita);
                            }
                            if ($record->gambar_berita_2) {
                                Storage::disk('public')->delete($record->gambar_berita_2);
                            }
                        }
                    }
                ),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}

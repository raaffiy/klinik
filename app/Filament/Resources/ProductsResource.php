<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\RichEditor;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        // Column nama_obat
                        TextInput::make('nama_obat')->required()->columnSpanFull(),
                        
                        // Column gambar_obat
                        FileUpload::make('gambar_obat')->required()->image()->disk('public')->columnSpan(1),

                        // Column gambar_obat_2
                        FileUpload::make('gambar_obat_2')->required()->image()->disk('public')->columnSpan(1),
                        
                        // Column kategori_obat
                        Select::make('kategori_obat')
                            ->options([
                                'Anemia' => 'Anemia',
                                'Demam' => 'Demam',
                                'Sakit kepala' => 'Sakit kepala',
                                'Asma' => 'Asma',
                                'Penyakit lambung' => 'Penyakit lambung',
                            ])
                            ->required()->columnSpan(1)
                            ->reactive()  // Enable reactivity for this field
                            ->afterStateUpdated(function ($state, callable $set) {
                                // Update the keterangan_obat based on kategori_obat selection
                                $descriptions = [
                                    'Anemia' => 'Penyakit yang disebabkan oleh mikroorganisme seperti bakteri, virus, jamur, atau parasit. (Flu, TBC, DBD, Pneumonia, HIV/AIDS)',
                                    'Demam' => 'Penyakit yang memengaruhi sistem pernapasan. (Asma, Bronkitis, Sinusitis, Emfisema)',
                                    'Sakit kepala' => 'Penyakit yang memengaruhi sistem pencernaan, seperti masalah lambung. (Radang Lambung, Diare, Sembelit , Maag Kronis)',
                                    'Asma' => 'Penyakit yang terkait dengan metabolisme tubuh. (Kolesterol Tinggi, Obesitas, Asam Urat)',
                                    'Penyakit lambung' => 'Penyakit yang memengaruhi kulit atau jaringan lunak. (Psoriasis, Jerawat, Anemia Jamur)',
                                ];
                            
                                if ($state && isset($descriptions[$state])) {
                                    $set('keterangan_obat', $descriptions[$state]);
                                } else {
                                    $set('keterangan_obat', null);
                                }
                            }),
                        
                        // Column keterangan_obat
                        RichEditor::make('keterangan_obat')
                            ->disabled()
                            ->columnSpan(1),

                        // Column deskripsi_obat
                        RichEditor::make('deskripsi_obat')
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

                        // Column indikasi_obat
                        RichEditor::make('indikasi_obat')
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

                        // Column komposisi_obat
                        RichEditor::make('komposisi_obat')
                            ->required()
                            ->toolbarButtons(['blockquote',
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

                        // Column dosis_obat
                        RichEditor::make('dosis_obat')
                            ->required()
                            ->toolbarButtons(['blockquote',
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

                        // Column penggunaan_obat
                        RichEditor::make('penggunaan_obat')
                            ->required()
                            ->toolbarButtons(['blockquote',
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

                        // Column efek_samping
                        RichEditor::make('efek_samping')
                            ->required()
                            ->toolbarButtons(['blockquote',
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

                        // Column kontraindikasi
                        RichEditor::make('kontraindikasi')
                            ->required()
                            ->toolbarButtons(['blockquote',
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
                TextColumn::make('nama_obat')->sortable()->searchable(),
                ImageColumn::make('gambar_obat'),
                TextColumn::make('kategori_obat')->sortable()->searchable(),
                TextColumn::make('keterangan_obat')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        $fields = ['gambar_obat', 'gambar_obat_2'];
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
                        $fields = ['gambar_obat', 'gambar_obat_2'];
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}

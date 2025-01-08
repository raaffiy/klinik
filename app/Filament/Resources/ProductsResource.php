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
                        FileUpload::make('gambar_obat')->required()->image()->disk('public')->columnSpanFull(),
                        
                        // Column kategori_obat
                        Select::make('kategori_obat')
                            ->options([
                                'Antihistamin' => 'Antihistamin',
                                'Analgesik' => 'Analgesik',
                                'Obat Batuk' => 'Obat Batuk',
                                'Antasida' => 'Antasida',
                                'Antipiretik' => 'Antipiretik',
                                'Antihipertensi' => 'Antihipertensi',
                                'Antiaritmia' => 'Antiaritmia',
                                'Antikoagulan dan Trombolitik' => 'Antikoagulan dan Trombolitik',
                                'Antibiotik' => 'Antibiotik',
                                'Antijamur' => 'Antijamur',
                                'Antivirus' => 'Antivirus',
                                'Antidiare' => 'Antidiare',
                                'Obat Pencahar' => 'Obat Pencahar',
                                'Antikonvulsan' => 'Antikonvulsan',
                                'Anticemas' => 'Anticemas',
                                'Antidepresan' => 'Antidepresan',
                                'Antiinflamasi' => 'Antiinflamasi',
                                'Antipsikotik' => 'Antipsikotik',
                                'Kortikosteroid' => 'Kortikosteroid',
                                'Imunosupresan' => 'Imunosupresan',
                                'Bronkodilator' => 'Bronkodilator',
                                'Dekongestan' => 'Dekongestan',
                                'Antiemetik' => 'Antiemetik',
                                'Sitotoksik' => 'Sitotoksik',
                                'Antineoplastik' => 'Antineoplastik',
                                'Obat tidur' => 'Obat tidur',
                            ])
                            ->required()->columnSpan(1)
                            ->reactive()  // Enable reactivity for this field
                            ->afterStateUpdated(function ($state, callable $set) {
                                // Update the keterangan_obat based on kategori_obat selection
                                $descriptions = [
                                    'Antihistamin' => 'Digunakan untuk melawan reaksi alergi seperti mata merah, bersin-bersin, dan hidung gatal.',
                                    'Analgesik' => 'Digunakan untuk meredakan nyeri. Contohnya adalah ibuprofen, aspirin, dan parasetamol.',
                                    'Obat Batuk' => 'Terdiri dari antitusif untuk batuk kering dan ekspektoran untuk menghilangkan dahak.',
                                    'Antasida' => 'Digunakan untuk mengatasi masalah lambung seperti maag.',
                                    'Antipiretik' => 'Digunakan untuk menurunkan demam.',
                                    'Antihipertensi' => 'Digunakan untuk mengontrol tekanan darah tinggi.',
                                    'Antiaritmia' => 'Digunakan untuk mengatasi gangguan irama jantung.',
                                    'Antikoagulan dan Trombolitik' => 'Digunakan untuk mencegah dan mengobati pembekuan darah.',
                                    'Antibiotik' => 'Digunakan untuk mengobati infeksi bakteri.',
                                    'Antijamur' => 'Digunakan untuk mengobati infeksi jamur.',
                                    'Antivirus' => 'Digunakan untuk mengobati infeksi virus.',
                                    'Antidiare' => 'Digunakan untuk mengatasi diare.',
                                    'Obat Pencahar' => 'Digunakan untuk mengatasi sembelit.',
                                    'Antikonvulsan' => 'Digunakan untuk mengobati kejang.',
                                    'Anticemas' => 'Digunakan untuk mengatasi kecemasan.',
                                    'Antidepresan' => 'Digunakan untuk mengobati depresi.',
                                    'Antiinflamasi' => 'Digunakan untuk mengurangi peradangan.',
                                    'Antipsikotik' => 'Digunakan untuk mengobati gangguan psikosis.',
                                    'Kortikosteroid' => 'Digunakan untuk mengurangi peradangan dan menekan sistem kekebalan tubuh.',
                                    'Imunosupresan' => 'Digunakan untuk menekan sistem kekebalan tubuh, biasanya setelah transplantasi organ.',
                                    'Bronkodilator' => 'Menangani penyempitan saluran pernapasan, seperti asma dan PPOK (penyakit paru obstruktif kronis).',
                                    'Dekongestan' => 'Menangani pembengkakan selaput lendir yang melapisi hidung untuk meredakan hidung tersumbat.',
                                    'Antiemetik' => 'Untuk meredakan mual dan muntah.',
                                    'Sitotoksik' => 'Digunakan dalam melawan sel kanker dan menurunkan daya tahan tubuh untuk sementara.',
                                    'Antineoplastik' => 'Digunakan dalam pengobatan kemoterapi untuk menghambat dan membunuh sel kanker.',
                                    'Obat tidur' => 'Memberikan efek menenangkan untuk menangani gangguan tidur, seperti insomnia.',
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
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column indikasi_obat
                        RichEditor::make('indikasi_obat')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column komposisi_obat
                        RichEditor::make('komposisi_obat')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column dosis_obat
                        RichEditor::make('dosis_obat')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column penggunaan_obat
                        RichEditor::make('penggunaan_obat')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column efek_samping
                        RichEditor::make('efek_samping')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
                            ])->columnSpanFull(),

                        // Column kontraindikasi
                        RichEditor::make('kontraindikasi')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'strike',
                                'link',
                                'blockquote',
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
                TextColumn::make('deskripsi_obat')->sortable()->searchable()->label('deskripsi_obat'),
                TextColumn::make('indikasi_obat')->sortable()->searchable()->label('indikasi_obat'),
                TextColumn::make('komposisi_obat')->sortable()->searchable()->label('komposisi_obat'),
                TextColumn::make('dosis_obat')->sortable()->searchable()->label('dosis_obat'),
                TextColumn::make('penggunaan_obat')->sortable()->searchable()->label('penggunaan_obat'),
                TextColumn::make('efek_samping')->sortable()->searchable()->label('efek_samping'),
                TextColumn::make('kontraindikasi')->sortable()->searchable()->label('kontraindikasi'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(
                    function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->gambar_obat) {
                                Storage::disk('public')->delete($value->gambar_obat);
                            }
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->gambar_obat) {
                                Storage::disk('public')->delete($value->gambar_obat);
                            }
                        }
                    }
                ),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }    
}

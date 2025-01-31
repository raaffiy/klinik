<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
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

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        // Column nama_event
                        TextInput::make('nama_event')->required()->columnSpanFull(),

                        // Column penyelenggara
                        TextInput::make('penyelenggara')->required()->columnSpanFull(),

                        // Column tanggal_event
                        TextInput::make('tanggal_event')->required()->columnSpanFull(),

                        // Column lokasi_event
                        TextInput::make('lokasi_event')->required()->columnSpanFull(),
                        
                        // Column deskripsi_event
                        RichEditor::make('deskripsi_event')
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

                        // Column susunan_acara
                        RichEditor::make('susunan_acara')
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

                        // Column gambar_event
                        FileUpload::make('gambar_event')->required()->image()->disk('public')->columnSpanFull(),

                        // Column gambar_event_2
                        FileUpload::make('gambar_event_2')->required()->image()->disk('public')->columnSpan(1),

                        // Column gambar_event_3
                        FileUpload::make('gambar_event_3')->required()->image()->disk('public')->columnSpan(1),

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                TextColumn::make('nama_event')->sortable()->searchable(),
                ImageColumn::make('gambar_event'),
                TextColumn::make('penyelenggara')->sortable()->searchable(),
                TextColumn::make('tanggal_event')->sortable()->searchable(),
                TextColumn::make('lokasi_event')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        $fields = ['gambar_event', 'gambar_event_2', 'gambar_event_3'];
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
                        $fields = ['gambar_event', 'gambar_event_2', 'gambar_event_3'];
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }    
}

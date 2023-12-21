<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoffeeResource\Pages;
use App\Filament\Resources\CoffeeResource\RelationManagers;
use App\Models\Coffee;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class CoffeeResource extends Resource
{
    protected static ?string $model = Coffee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('image_product')->required()->image()->disk('public'),
                        TextInput::make('name')->required(),
                        Textarea::make('short_description')->required(),
                        Textarea::make('long_description')->required(),
                        Select::make('category')
                            ->options([
                                'Espresso' => 'Espresso', 'Americano' => 'Americano', 'Cappuccino' => 'Cappuccino',
                                'Caffé Latte' => 'Caffé Latte', 'Mocha Latte' => 'Mocha Latte'
                            ])->required(),
                        Select::make('temperature')
                            ->options([
                                'Hot' => 'Hot', 'Currently' => 'Currently', 'Cold' => 'Cold',
                            ])->required(),
                        TextInput::make('price')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                ImageColumn::make('image_product'),
                TextColumn::make('short_description'),
                TextColumn::make('category')->sortable()->searchable(),
                TextColumn::make('temperature')->sortable()->searchable(),
                TextColumn::make('price')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(
                    function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->image_product) {
                                Storage::disk('public')->delete($value->image_product);
                            }
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->image_product) {
                                Storage::disk('public')->delete($value->image_product);
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
            'index' => Pages\ListCoffees::route('/'),
            'create' => Pages\CreateCoffee::route('/create'),
            'edit' => Pages\EditCoffee::route('/{record}/edit'),
        ];
    }
}

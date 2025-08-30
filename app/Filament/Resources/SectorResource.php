<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectorResource\Pages;
use App\Models\Sector;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SectorResource extends Resource
{
    protected static ?string $model = Sector::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'İçerik Yönetimi';

    protected static ?string $modelLabel = 'Sektör';

    protected static ?string $pluralModelLabel = 'Sektörler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Temel Bilgiler')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Sektör Adı')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('title')
                            ->label('Sektör Başlığı')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Sektörün detaylı başlığı (örn: Savunma ve Güvenlik Teknolojileri)'),

                        Forms\Components\Textarea::make('description')
                            ->label('Açıklama')
                            ->required()
                            ->maxLength(1000)
                            ->rows(4),

                        Forms\Components\Select::make('icon')
                            ->label('İkon')
                            ->required()
                            ->options([
                                'shield' => 'Kalkan (Savunma)',
                                'airplane' => 'Uçak (Havacılık)',
                                'car' => 'Araba (Otomotiv)',
                                'factory' => 'Fabrika (Endüstri)',
                                'anchor' => 'Çapa (Denizcilik)',
                                'train' => 'Tren (Demiryolu)',
                                'signal' => 'Sinyal (Telekom)',
                                'code' => 'Kod (Yazılım)',
                                'chart' => 'Grafik (Analiz)',
                                'users' => 'Kullanıcılar (Danışmanlık)',
                                'lightbulb' => 'Ampul (İnovasyon)',
                                'globe' => 'Dünya (Global)',
                            ])
                            ->searchable(),

                        Forms\Components\Select::make('color')
                            ->label('Renk Gradient')
                            ->required()
                            ->options([
                                'from-slate-600 to-slate-800' => 'Slate (Gri)',
                                'from-blue-400 to-blue-600' => 'Blue (Mavi)',
                                'from-red-500 to-red-700' => 'Red (Kırmızı)',
                                'from-amber-500 to-orange-600' => 'Amber-Orange (Turuncu)',
                                'from-cyan-500 to-blue-600' => 'Cyan-Blue (Cyan)',
                                'from-emerald-500 to-green-600' => 'Emerald-Green (Yeşil)',
                                'from-violet-500 to-purple-600' => 'Violet-Purple (Mor)',
                                'from-pink-500 to-rose-600' => 'Pink-Rose (Pembe)',
                            ])
                            ->searchable(),
                    ])->columns(2),

                Forms\Components\Section::make('Hizmetler')
                    ->schema([
                        Forms\Components\Repeater::make('services')
                            ->label('Sektör Hizmetleri')
                            ->schema([
                                Forms\Components\TextInput::make('service')
                                    ->label('Hizmet Adı')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columnSpanFull()
                            ->defaultItems(4)
                            ->maxItems(10)
                            ->reorderable()
                            ->collapsible(),
                    ]),

                Forms\Components\Section::make('Durum ve Sıralama')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->label('Yayınlandı')
                            ->default(true),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Öne Çıkan')
                            ->default(false),

                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sıralama')
                            ->numeric()
                            ->default(0)
                            ->helperText('Düşük sayılar önce görünür'),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Yayın Tarihi')
                            ->default(now()),
                    ])->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Sektör Adı')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\TextColumn::make('icon')
                    ->label('İkon')
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('services')
                    ->label('Hizmet Sayısı')
                    ->formatStateUsing(fn ($state) => count($state))
                    ->badge()
                    ->color('success'),

                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Öne Çıkan')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('Durum')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Sıra')
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Yayın Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Yayın Durumu')
                    ->placeholder('Tümü')
                    ->trueLabel('Yayınlandı')
                    ->falseLabel('Taslak'),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Öne Çıkan')
                    ->placeholder('Tümü')
                    ->trueLabel('Öne Çıkan')
                    ->falseLabel('Normal'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
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
            'index' => Pages\ListSectors::route('/'),
            'create' => Pages\CreateSector::route('/create'),
            'edit' => Pages\EditSector::route('/{record}/edit'),
        ];
    }
}

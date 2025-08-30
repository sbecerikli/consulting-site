<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'İçerik Yönetimi';

    protected static ?string $modelLabel = 'Hizmet';

    protected static ?string $pluralModelLabel = 'Hizmetler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Temel Bilgiler')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Başlık')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('URL')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\Textarea::make('excerpt')
                            ->label('Özet')
                            ->maxLength(500)
                            ->rows(3),

                        Forms\Components\RichEditor::make('body')
                            ->label('İçerik')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Görsel ve İkon')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Hizmet Görseli')
                            ->image()
                            ->directory('services')
                            ->maxSize(2048),

                        Forms\Components\FileUpload::make('hero_image')
                            ->label('Hero Görseli')
                            ->image()
                            ->directory('services/hero')
                            ->maxSize(2048),

                        Forms\Components\Select::make('icon')
                            ->label('İkon')
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
                    ])->columns(3),

                Forms\Components\Section::make('Özellikler ve Süreç')
                    ->schema([
                        Forms\Components\Repeater::make('features')
                            ->label('Özellikler')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->label('Özellik')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columnSpanFull()
                            ->defaultItems(3)
                            ->maxItems(10),

                        Forms\Components\Repeater::make('process')
                            ->label('Süreç Adımları')
                            ->schema([
                                Forms\Components\TextInput::make('step')
                                    ->label('Adım')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description')
                                    ->label('Açıklama')
                                    ->maxLength(500)
                                    ->rows(2),
                            ])
                            ->columnSpanFull()
                            ->defaultItems(3)
                            ->maxItems(8),
                    ]),

                Forms\Components\Section::make('Durum ve Yayın')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->label('Yayınlandı')
                            ->default(true),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Öne Çıkan')
                            ->default(false),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Yayın Tarihi')
                            ->default(now()),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Görsel')
                    ->circular()
                    ->size(40),

                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('excerpt')
                    ->label('Özet')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('Durum')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Öne Çıkan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Yayın Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}

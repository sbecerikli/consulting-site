<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPageResource\Pages;
use App\Models\AboutPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutPageResource extends Resource
{
    protected static ?string $model = AboutPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationLabel = 'Hakkımızda Sayfası';

    protected static ?string $modelLabel = 'Hakkımızda Sayfası';

    protected static ?string $pluralModelLabel = 'Hakkımızda Sayfaları';

    protected static ?string $navigationGroup = 'Sayfa Yönetimi';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero Bölümü')
                    ->schema([
                        Forms\Components\TextInput::make('hero_title')
                            ->label('Ana Başlık')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('hero_subtitle')
                            ->label('Alt Başlık')
                            ->required()
                            ->maxLength(500),
                    ])->columns(2),

                Forms\Components\Section::make('Şirket Hikayesi')
                    ->schema([
                        Forms\Components\TextInput::make('company_story_title')
                            ->label('Bölüm Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('company_story_content_1')
                            ->label('İlk Paragraf')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\Textarea::make('company_story_content_2')
                            ->label('İkinci Paragraf')
                            ->required()
                            ->maxLength(1000),
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\TextInput::make('company_founded_year')
                                    ->label('Kuruluş Yılı')
                                    ->required()
                                    ->numeric()
                                    ->minValue(1900)
                                    ->maxValue(2030),
                                Forms\Components\TextInput::make('completed_projects_count')
                                    ->label('Tamamlanan Proje Sayısı')
                                    ->required()
                                    ->numeric()
                                    ->minValue(0),
                                Forms\Components\TextInput::make('expertise_areas_count')
                                    ->label('Uzmanlık Alanı Sayısı')
                                    ->required()
                                    ->numeric()
                                    ->minValue(0),
                            ]),
                    ]),

                Forms\Components\Section::make('Misyon')
                    ->schema([
                        Forms\Components\TextInput::make('mission_title')
                            ->label('Misyon Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('mission_content')
                            ->label('Misyon İçeriği')
                            ->required()
                            ->maxLength(500),
                    ])->columns(2),

                Forms\Components\Section::make('Değerler')
                    ->schema([
                        Forms\Components\TextInput::make('values_title')
                            ->label('Değerler Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('values_subtitle')
                            ->label('Değerler Alt Başlığı')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\TextInput::make('value_1_title')
                                    ->label('1. Değer Başlığı')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('value_2_title')
                                    ->label('2. Değer Başlığı')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('value_3_title')
                                    ->label('3. Değer Başlığı')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Textarea::make('value_1_content')
                                    ->label('1. Değer İçeriği')
                                    ->required()
                                    ->maxLength(500),
                                Forms\Components\Textarea::make('value_2_content')
                                    ->label('2. Değer İçeriği')
                                    ->required()
                                    ->maxLength(500),
                                Forms\Components\Textarea::make('value_3_content')
                                    ->label('3. Değer İçeriği')
                                    ->required()
                                    ->maxLength(500),
                            ]),
                    ]),

                Forms\Components\Section::make('Ekip Bölümü')
                    ->schema([
                        Forms\Components\TextInput::make('team_title')
                            ->label('Ekip Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('team_subtitle')
                            ->label('Ekip Alt Başlığı')
                            ->required()
                            ->maxLength(500),
                    ])->columns(2),

                Forms\Components\Section::make('Hizmetler Bölümü')
                    ->schema([
                        Forms\Components\TextInput::make('services_title')
                            ->label('Hizmetler Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('services_subtitle')
                            ->label('Hizmetler Alt Başlığı')
                            ->required()
                            ->maxLength(500),
                    ])->columns(2),

                Forms\Components\Section::make('CTA Bölümü')
                    ->schema([
                        Forms\Components\TextInput::make('cta_title')
                            ->label('CTA Başlığı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('cta_subtitle')
                            ->label('CTA Alt Başlığı')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('cta_button_1_text')
                                    ->label('1. Buton Metni')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('cta_button_1_url')
                                    ->label('1. Buton Route')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('cta_button_2_text')
                                    ->label('2. Buton Metni')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('cta_button_2_url')
                                    ->label('2. Buton Route')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title')
                    ->label('Ana Başlık')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_founded_year')
                    ->label('Kuruluş Yılı')
                    ->sortable(),
                Tables\Columns\TextColumn::make('completed_projects_count')
                    ->label('Proje Sayısı')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Son Güncelleme')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Bulk actions disabled for page content
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutPages::route('/'),
            'edit' => Pages\EditAboutPage::route('/{record}/edit'),
        ];
    }
}

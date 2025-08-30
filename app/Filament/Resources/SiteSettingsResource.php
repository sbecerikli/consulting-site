<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Models\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Site Ayarları';

    protected static ?string $modelLabel = 'Site Ayarı';

    protected static ?string $pluralModelLabel = 'Site Ayarları';

    protected static ?string $navigationGroup = 'Site Yönetimi';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Şirket Bilgileri')
                    ->schema([
                        Forms\Components\TextInput::make('company_name')
                            ->label('Şirket Adı')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('company_description')
                            ->label('Şirket Açıklaması')
                            ->required()
                            ->maxLength(500),
                    ])->columns(2),

                Forms\Components\Section::make('İletişim Bilgileri')
                    ->schema([
                        Forms\Components\Textarea::make('address')
                            ->label('Adres')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\TextInput::make('phone')
                            ->label('Telefon')
                            ->required()
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('E-posta')
                            ->required()
                            ->email()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Sosyal Medya')
                    ->schema([
                        Forms\Components\TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('twitter_url')
                            ->label('Twitter URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Harita Ayarları')
                    ->schema([
                        Forms\Components\TextInput::make('latitude')
                            ->label('Enlem (Latitude)')
                            ->numeric()
                            ->step(0.00000001)
                            ->helperText('Örnek: 41.0082 (İstanbul için)'),
                        Forms\Components\TextInput::make('longitude')
                            ->label('Boylam (Longitude)')
                            ->numeric()
                            ->step(0.00000001)
                            ->helperText('Örnek: 28.9784 (İstanbul için)'),
                        Forms\Components\TextInput::make('map_zoom')
                            ->label('Zoom Seviyesi')
                            ->numeric()
                            ->default(15)
                            ->minValue(1)
                            ->maxValue(20)
                            ->helperText('1-20 arası değer (15 önerilen)')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Yasal Bilgiler')
                    ->schema([
                        Forms\Components\TextInput::make('copyright_text')
                            ->label('Telif Hakkı Metni')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('privacy_policy_url')
                            ->label('Gizlilik Politikası URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('terms_of_service_url')
                            ->label('Kullanım Şartları URL')
                            ->url()
                            ->maxLength(255),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Şirket Adı')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telefon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-posta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Son Güncelleme')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Bulk actions disabled for settings
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationLabel = 'İletişim Mesajları';

    protected static ?string $modelLabel = 'İletişim Mesajı';

    protected static ?string $pluralModelLabel = 'İletişim Mesajları';

    protected static ?string $navigationGroup = 'Site Yönetimi';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Mesaj Bilgileri')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Ad Soyad')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('E-posta')
                            ->required()
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Telefon')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('company')
                            ->label('Şirket')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subject')
                            ->label('Konu')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('message')
                            ->label('Mesaj')
                            ->required()
                            ->maxLength(2000)
                            ->rows(6),
                    ])->columns(2),

                Forms\Components\Section::make('Sistem Bilgileri')
                    ->schema([
                        Forms\Components\Toggle::make('is_read')
                            ->label('Okundu')
                            ->default(false),
                        Forms\Components\TextInput::make('ip_address')
                            ->label('IP Adresi')
                            ->disabled(),
                        Forms\Components\TextInput::make('source_page')
                            ->label('Kaynak Sayfa')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('created_at')
                            ->label('Gönderim Tarihi')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('updated_at')
                            ->label('Güncelleme Tarihi')
                            ->disabled(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Ad Soyad')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-posta')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Konu')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('company')
                    ->label('Şirket')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_read')
                    ->label('Durum')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Gönderim Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')
                    ->label('Okunma Durumu')
                    ->placeholder('Tümü')
                    ->trueLabel('Okundu')
                    ->falseLabel('Okunmadı'),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Başlangıç Tarihi'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Bitiş Tarihi'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn ($query, $date) => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn ($query, $date) => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Action::make('mark_as_read')
                    ->label('Okundu Olarak İşaretle')
                    ->icon('heroicon-o-eye')
                    ->color('success')
                    ->visible(fn (ContactMessage $record) => !$record->is_read)
                    ->action(function (ContactMessage $record) {
                        $record->update(['is_read' => true]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Mesajı Okundu Olarak İşaretle')
                    ->modalDescription('Bu mesajı okundu olarak işaretlemek istediğinizden emin misiniz?')
                    ->modalSubmitActionLabel('Evet, İşaretle')
                    ->modalCancelActionLabel('İptal'),
                Action::make('mark_as_unread')
                    ->label('Okunmadı Olarak İşaretle')
                    ->icon('heroicon-o-eye-slash')
                    ->color('warning')
                    ->visible(fn (ContactMessage $record) => $record->is_read)
                    ->action(function (ContactMessage $record) {
                        $record->update(['is_read' => false]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Mesajı Okunmadı Olarak İşaretle')
                    ->modalDescription('Bu mesajı okunmadı olarak işaretlemek istediğinizden emin misiniz?')
                    ->modalSubmitActionLabel('Evet, İşaretle')
                    ->modalCancelActionLabel('İptal'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('mark_as_read')
                        ->label('Seçilenleri Okundu Olarak İşaretle')
                        ->icon('heroicon-o-eye')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['is_read' => true]);
                            });
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Mesajları Okundu Olarak İşaretle')
                        ->modalDescription('Seçilen tüm mesajları okundu olarak işaretlemek istediğinizden emin misiniz?')
                        ->modalSubmitActionLabel('Evet, İşaretle')
                        ->modalCancelActionLabel('İptal'),
                    Tables\Actions\BulkAction::make('mark_as_unread')
                        ->label('Seçilenleri Okunmadı Olarak İşaretle')
                        ->icon('heroicon-o-eye-slash')
                        ->color('warning')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['is_read' => false]);
                            });
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Mesajları Okunmadı Olarak İşaretle')
                        ->modalDescription('Seçilen tüm mesajları okunmadı olarak işaretlemek istediğinizden emin misiniz?')
                        ->modalSubmitActionLabel('Evet, İşaretle')
                        ->modalCancelActionLabel('İptal'),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}

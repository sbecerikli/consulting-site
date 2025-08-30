<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterResource\Pages;
use App\Models\Newsletter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Bülten Abonelikleri';

    protected static ?string $modelLabel = 'Bülten Aboneliği';

    protected static ?string $pluralModelLabel = 'Bülten Abonelikleri';

    protected static ?string $navigationGroup = 'Site Yönetimi';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Abonelik Bilgileri')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('E-posta Adresi')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->disabled(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif Abonelik')
                            ->default(true),
                        Forms\Components\DateTimePicker::make('subscribed_at')
                            ->label('Abone Olma Tarihi')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('unsubscribed_at')
                            ->label('Abonelik İptal Tarihi')
                            ->disabled(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->label('E-posta')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Durum')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                Tables\Columns\TextColumn::make('subscribed_at')
                    ->label('Abone Olma')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('unsubscribed_at')
                    ->label('İptal Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Durum')
                    ->placeholder('Tümü')
                    ->trueLabel('Aktif')
                    ->falseLabel('Pasif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('toggle_status')
                    ->label('Durumu Değiştir')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->action(function (Newsletter $record) {
                        $record->update([
                            'is_active' => !$record->is_active,
                            'unsubscribed_at' => $record->is_active ? null : now(),
                        ]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Abonelik Durumunu Değiştir')
                    ->modalDescription('Bu aboneliğin durumunu değiştirmek istediğinizden emin misiniz?')
                    ->modalSubmitActionLabel('Evet, Değiştir')
                    ->modalCancelActionLabel('İptal'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsletters::route('/'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}

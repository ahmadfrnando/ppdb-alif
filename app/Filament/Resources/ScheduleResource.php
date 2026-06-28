<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Jadwal Pendaftaran';

    public static function getModelLabel(): string
    {
        return 'Jadwal Pendaftaran'; // singular
    }

    public static function getPluralModelLabel(): string
    {
        return 'Data Jadwal Pendaftaran'; // plural, ini yang mengubah header table
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('period')
                    ->required()
                    ->unique(),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('period')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif')
                    ->sortable()
                    ->beforeStateUpdated(function (Schedule $record, bool $state): void {
                        if ($state) {
                            $sudahAdaYangAktif = Schedule::where('is_active', true)
                                ->where('id', '!=', $record->id)
                                ->exists();

                            if ($sudahAdaYangAktif) {
                                // Tampilkan notifikasi error yang jelas
                                Notification::make()
                                    ->title('Gagal Mengaktifkan')
                                    ->body('Hanya boleh ada 1 schedule yang aktif dalam satu waktu.')
                                    ->danger()
                                    ->send();

                                // Ini yang paling penting: menghentikan proses update
                                throw ValidationException::withMessages([
                                    'is_active' => 'Sudah ada schedule lain yang sedang aktif.',
                                ]);
                            }
                        }
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}

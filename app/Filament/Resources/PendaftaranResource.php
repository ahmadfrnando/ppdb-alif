<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Models\Pendaftaran;
use Filament\Tables\Filters\Filter;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_siswa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ttl')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('agama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('warga_negara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jlh_saudara')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('anak_ke')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_ayah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pendidikan_ayah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan_ayah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_ibu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pendidikan_ibu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan_ibu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_wali')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pendidikan_wali')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan_wali')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telp')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zonasi')->label('Status'),
                Forms\Components\TextInput::make('jarak')->suffix(' Km')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                ->rowIndex(),
                Tables\Columns\TextColumn::make('nama_siswa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keterangan_jarak')->label('Jarak'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Daftar Pada')
                    ->dateTime('d M Y'),
                Tables\Columns\TextColumn::make('zonasi')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Lulus Zonasi' => 'success',
                        'Tidak Lulus Zonasi' => 'danger',
                    })
                    ->label('Status'),
            ])
            ->filters([
                SelectFilter::make('zonasi')
                ->options([
                    'Lulus Zonasi' => 'Lulus Zonasi',
                    'Tidak Lulus Zonasi' => 'Tidak Lulus Zonasi',
                ]),
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_from')->label('Tanggal Mulai'),
                        DatePicker::make('created_until')->label('Tanggal Akhir')->default(now()),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                Tables\Actions\Action::make('zonasi')
                    ->iconButton()
                    ->color('success')
                    ->icon('heroicon-o-map')
                    ->form([
                        Select::make('zonasi')
                            ->label('Status Zonasi')
                            ->options(['Lulus Zonasi' => 'Lulus Zonasi', 'Tidak Lulus Zonasi' => 'Tidak Lulus Zonasi'])
                            ->required(),
                    ])
                    ->action(function (array $data, Pendaftaran $record): void {
                        $record->update(['zonasi' => $data['zonasi']]);
                    })
                    ->modalWidth(MaxWidth::Large),
                Tables\Actions\ViewAction::make()
                    ->iconButton()
                    ->icon('heroicon-o-eye'),
                Tables\Actions\EditAction::make()
                    ->iconButton()
                    ->icon('heroicon-o-pencil-square'),
                Tables\Actions\DeleteAction::make()
                    ->iconButton()
                    ->icon('heroicon-o-trash'),
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
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}

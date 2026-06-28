<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\RelationManagers;
use App\Models\Pengumuman;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Pengumuman';

    public static function getModelLabel(): string
    {
        return 'Pengumuman'; // singular
    }

    public static function getPluralModelLabel(): string
    {
        return 'Data Pengumuman'; // plural, ini yang mengubah header table
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // judul, body, tgl, foto
                Select::make('schedule_id')
                ->options(Schedule::all()->pluck('period', 'id'))
                ->label('Periode')
                ->searchable(),
                TextInput::make('judul')->required(),
                DatePicker::make('tgl')->label('Dibuat Pada')->required(),
                FileUpload::make('foto')
                ->label('Upload Gambar max 1 MB')
                ->directory('pengumuman')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('16:9')
                ->imageResizeTargetWidth('1920')
                ->imageResizeTargetHeight('1080')
                ->maxSize(1024),
                RichEditor::make('body')->label('Isi Pengumuman')->required()->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->rowIndex(),
                TextColumn::make('schedule.period')->label('Periode'),
                TextColumn::make('judul')->limit(30),
                TextColumn::make('tgl')->label('Dibuat Pada')->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button()->color('primary'),
                Tables\Actions\DeleteAction::make()->button()->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePengumumen::route('/'),
        ];
    }
}

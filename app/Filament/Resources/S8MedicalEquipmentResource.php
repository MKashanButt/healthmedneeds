<?php

namespace App\Filament\Resources;

use App\Filament\Resources\S8MedicalEquipmentResource\Pages;
use App\Filament\Resources\S8MedicalEquipmentResource\RelationManagers;
use App\Models\S8MedicalEquipment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class S8MedicalEquipmentResource extends Resource
{
    protected static ?string $model = S8MedicalEquipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $pluralLabel = 'S8 Medical Equipment';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fname')
                    ->label('First Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lname')
                    ->label('Last Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('message'),
                Tables\Columns\TextColumn::make('zip_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ip')
                    ->formatStateUsing(fn($state) => '•••••')
                    ->tooltip(fn($state) => $state)
                    ->copyable()
                    ->copyMessage('IP address copied')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListS8MedicalEquipment::route('/'),
            'create' => Pages\CreateS8MedicalEquipment::route('/create'),
            'edit' => Pages\EditS8MedicalEquipment::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canAccess(): bool
    {
        return Auth::user()->hasCompany('S8 Medical Equipment');
    }
}

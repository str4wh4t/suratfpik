<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApprovalSuratTugasResource\Pages;
use App\Filament\Resources\ApprovalSuratTugasResource\RelationManagers;
use App\Models\ApprovalSuratTugas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApprovalSuratTugasResource extends Resource
{
    protected static ?string $model = ApprovalSuratTugas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                //
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
            'index' => Pages\ListApprovalSuratTugas::route('/'),
            'create' => Pages\CreateApprovalSuratTugas::route('/create'),
            'edit' => Pages\EditApprovalSuratTugas::route('/{record}/edit'),
        ];
    }
}

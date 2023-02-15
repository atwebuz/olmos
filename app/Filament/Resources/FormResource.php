<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormResource\Pages;
use App\Filament\Resources\FormResource\RelationManagers;
use App\Models\Form;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form as FilamentForm;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormResource extends Resource
{
    protected static ?string $model = Form::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(FilamentForm $form): FilamentForm
    {
        return $form
            ->schema([
                Card::make()->schema([

                    TextInput::make('fullname')->required(),
                    TextInput::make('email')->required(),
                    TextInput::make('subject')->required(),
                    TextInput::make('time')->required(),
                    RichEditor::make('message'),
                    Toggle::make('newsletter')

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('fullname')->limit(50)->sortable()->searchable(),
                TextColumn::make('email')->limit(50)->searchable(),
                TextColumn::make('subject')->limit(50)->sortable(),
                TextColumn::make('time')->limit(50),
                BooleanColumn::make('newsletter')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListForms::route('/'),
            'create' => Pages\CreateForm::route('/create'),
            'edit' => Pages\EditForm::route('/{record}/edit'),
        ];
    }
}

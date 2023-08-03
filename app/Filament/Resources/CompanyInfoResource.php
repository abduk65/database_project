<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyInfoResource\Pages;
use App\Filament\Resources\CompanyInfoResource\RelationManagers;
use App\Models\CompanyInfo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Pages\Actions\Action;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Expr\Cast\Array_;

class CompanyInfoResource extends Resource
{
    protected static ?string $model = CompanyInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Person_Name')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Job_Title')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Email')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Website')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Company_Name')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Phone_Number')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Fax_Number')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Address')
                    ->maxLength(36),
                Forms\Components\TextInput::make('City')
                    ->maxLength(36),
                Forms\Components\TextInput::make('PostCode')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Mobile')
                    ->maxLength(36),
                Forms\Components\TextInput::make('Bussiness_Type')
                    ->maxLength(36),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Person_Name'),
                TextColumn::make('Job_Title'),
                TextColumn::make('Email'),
                TextColumn::make('Website'),
                TextColumn::make('Company_Name'),
                TextColumn::make('Phone_Number'),
                TextColumn::make('Fax_Number'),
                TextColumn::make('Address'),
                TextColumn::make('City'),
                TextColumn::make('PostCode'),
                TextColumn::make('Mobile'),
                TextColumn::make('Bussiness_Type'),
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
            'index' => Pages\ListCompanyInfos::route('/'),
            'create' => Pages\CreateCompanyInfo::route('/create'),
            'edit' => Pages\EditCompanyInfo::route('/{record}/edit'),
            'import' => Pages\importData::route('/importData')
        ];
    }
}

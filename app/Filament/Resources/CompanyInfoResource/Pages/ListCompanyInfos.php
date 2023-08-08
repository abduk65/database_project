<?php

namespace App\Filament\Resources\CompanyInfoResource\Pages;

use App\Filament\Resources\CompanyInfoResource;
use App\Models\CompanyInfo;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\FuncCall;
use Spatie\SimpleExcel\SimpleExcelReader;

class ListCompanyInfos extends ListRecords
{
    protected static string $resource = CompanyInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Action::make('import data')->url('company-infos/importData'),
            Actions\Action::make('importExcel')->form([
                FileUpload::make('upload')
                    ->disk('local')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['text/csv', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
            ])->action(function (array $data): void {
                $dir = explode('/', $data['upload']);
                $rows = SimpleExcelReader::create(storage_path('app' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $dir[1]))->getRows();
                $rows->each(function (array $rowProperties) {
                    CompanyInfo::import($rowProperties);
                });
            })
        ];
    }

    public function openImportExcel($data)
    {
    }

    protected static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}

<?php

namespace App\Filament\Resources\CompanyInfoResource\Pages;

use App\Filament\Resources\CompanyInfoResource;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListCompanyInfos extends ListRecords
{
    protected static string $resource = CompanyInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('import data')->action('importData'),
        ];
    }

    protected static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public function importData(): void
    {
        $this->dispatchBrowserEvent('open-settings-modal');
    }
}

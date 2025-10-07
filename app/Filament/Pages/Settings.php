<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Enums\NavigationGroup;
use App\Models\Settings as SettingsModel;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use UnitEnum;

/**
 * @property-read Schema $form
 */
final class Settings extends Page
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected string $view = 'filament.pages.settings';

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::Configuration;

    protected static ?int $navigationSort = 99;

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Section::make('Google Analytics Configuration')
                        ->description('Configure Google Analytics 4 property settings')
                        ->schema([
                            TextInput::make('property_id')
                                ->label('GA4 Property ID')
                                ->required()
                                ->maxLength(100)
                                ->placeholder('123456789'),
                            TextInput::make('google_tag_id')
                                ->label('Google Tag ID')
                                ->required()
                                ->maxLength(100)
                                ->placeholder('G-XXXXXXXXXX'),
                        ])
                        ->columns(2),

                    Section::make('Google Search Console Configuration')
                        ->description('Configure Search Console property settings')
                        ->schema([
                            TextInput::make('site_url')
                                ->label('Site URL')
                                ->required()
                                ->url()
                                ->maxLength(500)
                                ->placeholder('https://example.com'),
                        ]),

                    Section::make('Google Service Account')
                        ->description('Upload the Google Service Account JSON key file for API authentication')
                        ->schema([
                            FileUpload::make('google_service_account')
                                ->label('Service Account JSON Key')
                                ->acceptedFileTypes(['application/json'])
                                ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => 'google-service-account.json')
                                ->maxSize(1024)
                                ->helperText('Upload the JSON key file from Google Cloud Console'),
                        ]),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (! $record) {
            $record = new SettingsModel();
        }

        $record->fill($data);
        $record->save();

        if ($record->wasRecentlyCreated) {
            $this->form->record($record)->saveRelationships();
        }

        Notification::make()
            ->success()
            ->title('Settings saved')
            ->send();
    }

    public function getRecord(): ?SettingsModel
    {
        return SettingsModel::query()->first();
    }
}

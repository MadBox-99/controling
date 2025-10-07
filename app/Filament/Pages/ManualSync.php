<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Enums\NavigationGroup;
use App\Models\Settings;
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Google\Analytics\Data\V1beta\Client\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\RunReportRequest;
use Illuminate\Support\Facades\Storage;
use UnitEnum;

final class ManualSync extends Page
{
    public ?array $data = [];

    protected string $view = 'filament.pages.manual-sync';

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::Configuration;

    protected static ?int $navigationSort = 98;

    public function syncAction(): Action
    {
        return Action::make('sync')
            ->label('Start Sync')
            ->button()
            ->color('primary')
            ->action('performSync');
    }

    public function performSync(): void
    {
        $settings = Settings::query()->first();

        if (! $settings || ! $settings->google_service_account) {
            Notification::make()
                ->title('Google Service Account credentials not configured.')
                ->body('Please configure the credentials in Settings first.')
                ->danger()
                ->send();

            return;
        }

        if (! $settings->property_id) {
            Notification::make()
                ->title('GA4 Property ID not configured.')
                ->body('Please configure the Property ID in Settings first.')
                ->danger()
                ->send();

            return;
        }

        try {
            // Create the Analytics Data client with credentials array directly
            $client = new BetaAnalyticsDataClient([
                'credentials' => Storage::json($settings->google_service_account),
            ]);

            // Make an API call
            $request = (new RunReportRequest())
                ->setProperty('properties/'.$settings->property_id)
                ->setDateRanges([
                    new DateRange([
                        'start_date' => '7daysAgo',
                        'end_date' => 'today',
                    ]),
                ])
                ->setDimensions([
                    new Dimension(['name' => 'date']),
                ])
                ->setMetrics([
                    new Metric(['name' => 'activeUsers']),
                    new Metric(['name' => 'sessions']),
                ]);

            $response = $client->runReport($request);

            // Count the results
            $rowCount = 0;
            foreach ($response->getRows() as $_) {
                $rowCount++;
            }

            Notification::make()
                ->title('Sync completed successfully.')
                ->body("Retrieved {$rowCount} rows from Google Analytics.")
                ->success()
                ->send();

        } catch (Exception $e) {
            Notification::make()
                ->title('Sync failed.')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }
}

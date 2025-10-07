<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\GoogleAnalitycs\OrderByType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnalyticsSettings>
 */
final class AnalyticsSettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dimensions = [['name' => 'city'], ['name' => 'country'], ['name' => 'deviceCategory']];
        $metrics = [['name' => 'activeUsers'], ['name' => 'newUsers'], ['name' => 'sessions']];
        $selectedDimensions = $this->faker->randomElements($dimensions, count: 2);
        $selectedMetrics = $this->faker->randomElements($metrics, count: 2);
        $selectedOrderByType = $this->faker->randomElement(OrderByType::class);
        if ($selectedOrderByType === OrderByType::DIMENSION) {
            $selectedOrderBy = $this->faker->randomElement($selectedDimensions)['name'];
        } else {
            $selectedOrderBy = $this->faker->randomElement($selectedMetrics)['name'];
        }

        return [
            'dimensions' => $selectedDimensions,
            'metrics' => $selectedMetrics,
            'order_by_type' => $selectedOrderByType,
            'order_by' => $selectedOrderBy,
            'order_by_direction' => $this->faker->randomElement(['asc', 'desc']),
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Bookings;
use App\Models\BookingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookings::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'booking_type' => BookingType::inRandomOrder()->first()->id,
            'booking_date' => now(),
            'return_date' => now(),
            'no_of_passenger' => $this->faker->randomDigit,
            'no_of_vehicles' => $this->faker->randomDigit,
        ];
    }
}

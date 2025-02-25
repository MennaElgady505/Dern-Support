<?php

namespace Database\Factories;

use App\Models\RepairRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepairRequestFactory extends Factory
{
    protected $model = RepairRequest::class;

    public function definition()
    {
        return [
            'user_type' => 'individual',
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'device_type' => 'Laptop',
            'issue_description' => 'Screen not working',
            'service_type' => 'drop_off',
            'office_location' => 'Downtown Office',
            'preferred_date' => now(),
        ];
    }
}

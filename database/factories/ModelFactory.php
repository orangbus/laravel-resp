<?php

namespace VendorName\Skeleton\Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'password' => bcrypt('admin666'),
            'status' => random_int(0, 1),
        ];
    }
}

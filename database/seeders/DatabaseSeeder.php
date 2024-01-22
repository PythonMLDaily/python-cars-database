<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AddonCategory;
use App\Models\Car;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'title' => 'Interior'
            ],
            [
                'id' => 2,
                'title' => 'Exterior'
            ]
        ];

        foreach ($categories as $category) {
            AddonCategory::create($category);
        }

        foreach ($this->getCars() as $car) {
            $dbCAR = Car::create($car['carInfo']);
            foreach ($car['addons'] as $addon) {
                $dbCAR->carAddons()->create($addon);
            }
        }
    }

    private function getCars(): array
    {
        return [
            [
                'carInfo' => [
                    'manufacturer' => 'BMW',
                    'model' => 'M3',
                    'year' => 2018,
                    'type' => 'sedan',
                    'drivetrain' => 'RWD',
                ],
                'addons' => [
                    [
                        'title' => 'M Performance Exhaust',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'M Performance Carbon Fiber Rear Spoiler',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'M Performance Carbon Fiber Front Splitters',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'BMW',
                    'model' => 'M4',
                    'year' => 2018,
                    'type' => 'coupe',
                    'drivetrain' => 'AWD',
                ],
                'addons' => [
                    [
                        'title' => 'M Performance Exhaust',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'M Performance Carbon Fiber Rear Spoiler',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'M Performance Carbon Fiber Front Splitters',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Audi',
                    'model' => 'A1',
                    'year' => 2015,
                    'type' => 'coupe',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Infotainment System',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Audi Sport Carbon Fiber Rear Spoiler',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Audi Sport Carbon Fiber Front Splitters',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Volkswagen',
                    'model' => 'Polo',
                    'year' => 2010,
                    'type' => 'hatchback',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Leather Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Tow bar',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Volkswagen',
                    'model' => 'Golf',
                    'year' => 2015,
                    'type' => 'hatchback',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Leather Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Tow bar',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Volkswagen',
                    'model' => 'Golf',
                    'year' => 2015,
                    'type' => 'hatchback',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Alkantara Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated/Cooled Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Sport Exhaust',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Volkswagen',
                    'model' => 'Passat',
                    'year' => 2020,
                    'type' => 'hatchback',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Leather Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Tow bar',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Volvo',
                    'model' => 'S90',
                    'year' => 2023,
                    'type' => 'sedan',
                    'drivetrain' => 'AWD',
                ],
                'addons' => [
                    [
                        'title' => 'Leather Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated/Cooled Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Roof Rack',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Mercedes',
                    'model' => 'C63 AMG',
                    'year' => 2023,
                    'type' => 'sedan',
                    'drivetrain' => 'RWD',
                ],
                'addons' => [
                    [
                        'title' => 'Alkantara Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Heated/Cooled Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Carbon Fiber Steering Wheel',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Laser Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Side Skirts',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
            [
                'carInfo' => [
                    'manufacturer' => 'Fiat',
                    'model' => '500',
                    'year' => 2013,
                    'type' => 'hatchback',
                    'drivetrain' => 'FWD',
                ],
                'addons' => [
                    [
                        'title' => 'Leather Seats',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'Automated Gearbox',
                        'addon_category_id' => 1,
                    ],
                    [
                        'title' => 'LED Headlights',
                        'addon_category_id' => 2,
                    ],
                    [
                        'title' => 'Tow bar',
                        'addon_category_id' => 2,
                    ],
                ],
            ],
        ];
    }
}

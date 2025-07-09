<?php

namespace Database\Seeders;

use App\Models\Example;
use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $examples = [
            'test-example-1',
            'test-example-2',
            'test-example-3',
            'interface-binding-test',
            'laravel-route-test'
        ];

        foreach ($examples as $name) {
            Example::create(['name' => $name]);
        }

        $this->command->info('Example records created successfully!');
    }
}

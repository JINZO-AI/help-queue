<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $topics = collect(['Git', 'Laravel', 'Blade', 'Database', 'Setup'])
            ->map(fn($name) => Topic::create(['name' => $name]));

        Ticket::factory(8)->create(fn() => ['topic_id' => $topics->random()->id]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure we have a user
        $user = \App\Models\User::first() ?? \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        // Create Categories
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology', 'color' => '#3b82f6'],
            ['name' => 'Design', 'slug' => 'design', 'color' => '#ec4899'],
            ['name' => 'Tutorials', 'slug' => 'tutorials', 'color' => '#10b981'],
            ['name' => 'News', 'slug' => 'news', 'color' => '#f59e0b'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::firstOrCreate(['slug' => $category['slug']], $category);
        }

        // Create Tags
        $tags = ['Laravel', 'PHP', 'JavaScript', 'CSS', 'Tailwind', 'Vue', 'React', 'Filament'];
        foreach ($tags as $tag) {
            \App\Models\Tag::firstOrCreate(['slug' => \Illuminate\Support\Str::slug($tag)], ['name' => $tag]);
        }

        // Create Posts
        $cats = \App\Models\Category::all();
        $tags = \App\Models\Tag::all();

        for ($i = 0; $i < 10; $i++) {
            $title = fake()->sentence();
            $post = \App\Models\Post::create([
                'user_id' => $user->id,
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title) . '-' . rand(1000, 9999), 
                'short_description' => fake()->paragraph(),
                'content' => fake()->paragraphs(5, true),
                'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
                'featured_image' => 'https://picsum.photos/seed/' . rand(1, 1000) . '/800/600',
            ]);

            $post->categories()->attach($cats->random(rand(1, 2))->pluck('id'));
            $post->tags()->attach($tags->random(rand(1, 3))->pluck('id'));
        }
    }
}

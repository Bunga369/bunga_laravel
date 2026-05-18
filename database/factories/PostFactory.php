<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //menghasilkan url gambar dummy berukuran 680x480 de
            'image' => $this->faker->imageUrl(680, 480, 'tech' ,true),
            //menghasilkan kalimat acak untuk judul
            'title' => $this->faker->sentence(),
            //menghasilkan beberapa paragraf teks acak untuk konten
            'content' => $this->faker->paragraph(3, true),
            'created_at' => now(),
            'updated_at' =>now(),       
        ];
    }
}

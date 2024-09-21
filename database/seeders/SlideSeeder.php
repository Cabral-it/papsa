<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domains\Slide\Model\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'image' => 'slides/carousel.jpg',
            'description' => 'SLIDE : 1 Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
        ]);
        Slide::create([
            'image' => 'slides/carousel.jpg',
            'description' => 'SLIDE : 2 Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
        ]);
        Slide::create([
            'image' => 'slides/carousel.jpg',
            'description' => 'SLIDE : 3 Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
        ]);
        Slide::create([
            'image' => 'slides/carousel.jpg',
            'description' => 'SLIDE : 4 Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
        ]);
        Slide::create([
            'image' => 'slides/carousel.jpg',
            'description' => 'SLIDE : 5 Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'
        ]);
    }
}

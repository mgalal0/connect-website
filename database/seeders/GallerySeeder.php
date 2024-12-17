<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery ;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $galleries = [
            ['id' => 1, 'name' => 'title1', 'description' => 'description', 'image' => 'img1.png'],
            ['id' => 2, 'name' => 'title2', 'description' => 'description', 'image' => 'img2.png'],
            ['id' => 3, 'name' => 'title3', 'description' => 'description', 'image' => 'img3.png'],
            ['id' => 4, 'name' => 'title4', 'description' => 'description', 'image' => 'img4.png'],
            ['id' => 5, 'name' => 'title5', 'description' => 'description', 'image' => 'img5.png'],
            ['id' => 6, 'name' => 'title6', 'description' => 'description', 'image' => 'img6.png'],
            ['id' => 7, 'name' => 'title7', 'description' => 'description', 'image' => 'proj-img2.png'],
            ['id' => 8, 'name' => 'title8', 'description' => 'description', 'image' => 'proj-img3.png'],
            ['id' => 9, 'name' => 'title9', 'description' => 'description', 'image' => 'proj-img4.png'],
       
        ];
        //
        foreach ($galleries as $gallery) {
            Gallery::create([
                'id' => $gallery['id'],
                'name' => $gallery['name'],
                'description' => $gallery['description'],
                'image'=>$gallery['image']

            ]);
        }
    }
}

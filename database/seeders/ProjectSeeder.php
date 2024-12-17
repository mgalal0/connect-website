<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects=[
['name'=>'project1','description' =>'decription1','image'=>'proj-img1.png','service_id'=>1],
['name'=>'project2','description' =>'decription2','image'=>'proj-img2.png','service_id'=>1],
['name'=>'project3','description' =>'decription3','image'=>'proj-img3.png','service_id'=>1],
['name'=>'project4','description' =>'decription4','image'=>'proj-img4.png','service_id'=>1]
        ];

        foreach ($projects as $project) {
            Project::create([
                'name' => $project['name'],
                'description' => $project['description'],
                'image'=>$project['image'],
                'service_id'=>$project['service_id']

            ]);
        }
    }
}

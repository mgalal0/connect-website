<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServeceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['id' => 1, 'name' => 'POSM Promotional and Advertising Materials', 'description' => 'Creating brand awareness and a lasting impression with the target audience to engage them in achieving desired goals through promotions, banners, and other digital and print means that meet the highest standards', 'image' => 'posm-img.png'],
            ['id' => 2, 'name' => 'Brand Activation', 'description' => 'Connect is known for its success in managing branding events in Saudi Arabia. It features an integrated team that covers all parts of the event marketing strategy from start to finish', 'image' => 'brand-img.png'],
            ['id' => 3, 'name' => 'Graphic Design', 'description' => 'The design team of CONNECT does not set any limits to its creativity; it works according to marketing-psychological principles in order to achieve the greatest possible impact on the target audience and to reach the desired goals.', 'image' => 'graphic-img.png'],
            ['id' => 4, 'name' => 'Personalized Gifts', 'description' => 'At Connect, we focus on providing unique promotional gifts specifically designed to help brands leave a lasting impression on their customers and partners. With our exceptional promotional gifts, they can highlight their logo or convey their message to the target audience.', 'image' => 'gifts-img.png'],
            ['id' => 5, 'name' => 'Exhibition Management', 'description' => 'CONNECT offers creative solutions for all trade show needs to participate in local, regional and global forums, from planning and design to execution and management. Engage partners and customers with your brand.', 'image' => 'mang-bg.png'],
            ['id' => 6, 'name' => 'Event Management', 'description' => 'We have a cohesive team with experience in managing all types of marketing initiatives. Whether you are planning a business event, a conference or a marketing event, we are the ideal choice to create a seamless and memorable experience.', 'image' => 'event-img.png'],
            ['id' => 7, 'name' => 'Managing Social Media Accounts', 'description' => 'We create marketing plans, create content of all kinds, manage pages and run advertising campaigns to improve your presence on digital platforms and reach your target audiences and customers.', 'image' => 'social.png']
        ];
        foreach ($services as $service) {
            Service::create([
                'id' => $service['id'],
                'name' => $service['name'],
                'description' => $service['description'],
                'image'=>$service['image']

            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\PageType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Legel Basement',
            'General Contracting',
            'Driveway & Walking',
            'Flooring',
            'Sliding',
            'Paint Works',
            'Concrete Works',
            'Decks & Fencing',
            'Landscaping & Patio',
            'Trim & Finish Works',
            'Doors & Window Installation',
            'Interior & Exterior Designing',
            'Framing & Drywall Works',
            'Custom CLoset &  Tv Units',
            'Cabinets and Bathroom',
            'New & Remodelling Kicthen'
        ];

        foreach ($data as $i){
            PageType::create([
                'title' => $i
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\AddPlacement;
use Illuminate\Database\Seeder;

class add_placement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddPlacement::Create([
            'name'=>'Top',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Top Left',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Top Right',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Top Down',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Mid Left',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Down Left',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Details Down',
            'status'=>'1',
        ]);
        AddPlacement::Create([
            'name'=>'Down',
            'status'=>'1',
        ]);
    }
}

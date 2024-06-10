<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                "name" => "front_end",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat doloremque voluptatum cupiditate. Provident dicta ex nobis ipsa, voluptatum vel facere magni deleniti, incidunt nulla recusandae omnis itaque, accusamus aspernatur veniam."
            ],
            [
                "name" => "back_end",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quia vitae. Iste earum, incidunt enim natus, minus voluptatibus, repudiandae nostrum eaque quos itaque nam! Temporibus magnam nihil fuga nostrum corporis."
            ]
        ];

        foreach ($types as $type) {

            $new_type = Type::create($type);

        }
    }
}

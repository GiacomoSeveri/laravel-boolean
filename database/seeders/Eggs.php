<?php

namespace Database\Seeders;

use App\Models\Eggs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eggs = config('egg.php');

        foreach ($eggs as $egg) {
            $new_egg = new Eggs();

            $new_egg->color = $egg['color'];
            $new_egg->content = $egg['content'];
            $new_egg->type = $egg['type'];
            $new_egg->size = $egg['size'];
            $new_egg->save();
        }
    }
}

<?php

use App\MainCategory;
use App\Category;
use App\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 8; $i++) {
            $fk = Faker\Factory::create();
            $d = MainCategory::create([
                'name' => $fk->word()
            ]);
            for($ttt = 0;$ttt<10; $ttt++) {
                $u = Category::create([
                    'main_categories_id' => $d->id,
                    'name'               => $fk->sentence(3),
                    'parent'             => -1
                ]);
                for($sttt = 0;$sttt<4; $sttt++) {

                    $f = SubCategory::create([
                        'main_categories_id' => $d->id,
                        'categories_id'      => $u->id,
                        'name'               => $fk->sentence(2),
                        'min_point'          => rand(0, 100),
                        'max_point'          => rand(100, 999)

                    ]);
                }
            }

        }
    }
}

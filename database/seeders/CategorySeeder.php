<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ 'name' => 'Laravel' , 'slug' =>  'laravel']);
        Category::create([ 'name' => 'Wordpress' , 'slug' =>  'wordpress']);
        Category::create([ 'name' => 'Diseño Web' , 'slug' =>  'diseno-Web']);
        Category::create([ 'name' => 'Web Php' , 'slug' =>  'administrables']);
        Category::create([ 'name' => 'Diseño Gráfico' , 'slug' =>  'diseno-grafico']);

    }
}
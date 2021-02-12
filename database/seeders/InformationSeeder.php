<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;
class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([ 'label' => 'facebook' , 'description' =>  'https://www.facebook.com/alejandroaguilar.dev']);
        Information::create([ 'label' => 'instagram' , 'description' =>  'https://www.instagram.com/alejandroaguilar.dev']);
        Information::create([ 'label' => 'github' , 'description' =>  'https://github.com/alejandroaguilardev']);
        Information::create([ 'label' => 'linkedin' , 'description' =>  'https://www.linkedin.com/in/alejandro-aguilar-879402153/']);
        Information::create([ 'label' => 'whatsapp' , 'description' =>  '51923844025']);
        Information::create([ 'label' => 'mobile' , 'description' =>  '(+51) 923 844 025']);
        Information::create([ 'label' => 'email' , 'description' =>  'alexaguilar281@gmail.com']);
        Information::create([ 'label' => 'direction' , 'description' =>  'San Martin de Porres,  Lima - Perú']);
    }
}

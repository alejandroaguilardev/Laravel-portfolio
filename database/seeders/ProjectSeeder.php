<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
       
        //1-laravel
        Project::create(['name' => 'Alta Moda', 'image' => 'img/projects/altamoda.jpg', 'category_id' => 1,
        'link' => 'http://localhost/portafolio_recursos/Proyetcos/laravel/altamoda/' , 'fecha' => '2020', 'description' => 
        'Empresa de tecnología, sitio web para promocionar sus productos digitales']); 
        Project::create(['name' => 'Cami & Vale Industrial', 'image' => 'img/projects/camiyvaleindustrial.jpg', 'category_id' => 1, 
        'link' => 'http://localhost/portafolio_recursos/Proyetcos/laravel/camiyvaleindustrial/' , 'fecha' => '2021','description' => 
        'IntiCoin es una solución de criptomoneda digital diseñado para potenciar el comercio en el Perú']); 
        Project::create(['name' => 'Dafft', 'image' => 'img/projects/dafft.jpg', 'category_id' => 1, 
        'link' => 'http://localhost/portafolio_recursos/Proyetcos/laravel/dafft/' ,'fecha' => '2020', 'description' => 
        'Ofecen una gran variedad de espacios de trabajo que van desde oficinas virtuales, compartidas y  privadas.']);
        
        //2-Wordpress

         //3-Design Web
         Project::create(['name' => 'Sytem Group', 'image' => 'img/projects/system-group.jpg', 'category_id' => 3,
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/design-web/sytemgroup/' , 'fecha' => '2020', 'description' => 
         'Empresa de tecnología, sitio web para promocionar sus productos digitales']); 
         Project::create(['name' => 'Inticoin', 'image' => 'img/projects/inticoin.jpg', 'category_id' => 3, 
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/design-web/inticoin/' , 'fecha' => '2020','description' => 
         'IntiCoin es una solución de criptomoneda digital diseñado para potenciar el comercio en el Perú']); 
         Project::create(['name' => 'NeoCoworking', 'image' => 'img/projects/neocoworking.jpg', 'category_id' => 3, 
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/design-web/neocoworking/' ,'fecha' => '2020', 'description' => 
         'Ofecen una gran variedad de espacios de trabajo que van desde oficinas virtuales, compartidas y  privadas.']);
        
         //4-Administrables
         Project::create(['name' => 'Ojos se Luce', 'image' => 'img/projects/ojos-se-luce.jpg', 'category_id' => 4,
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/php/ojos-se-luce/' , 'fecha' => '2020', 'description' => 
         'Empresa de tecnología, sitio web para promocionar sus productos digitales']); 
         Project::create(['name' => 'Labora', 'image' => 'img/projects/labora.jpg', 'category_id' => 4, 
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/php/labora/' , 'fecha' => '2020','description' => 
         'IntiCoin es una solución de criptomoneda digital diseñado para potenciar el comercio en el Perú']); 
         Project::create(['name' => 'Metro', 'image' => 'img/projects/metro.jpg', 'category_id' => 4, 
         'link' => 'http://localhost/portafolio_recursos/Proyetcos/php/metro/' ,'fecha' => '2020', 'description' => 
         'Ofecen una gran variedad de espacios de trabajo que van desde oficinas virtuales, compartidas y  privadas.']);

         //5 Design 

         Project::create(['name' => 'Logotype', 'image' => 'img/projects/logotype.jpg', 'category_id' => 5,
         'link' => asset('img/projects/logotype.jpg') , 'fecha' => '2020', 'description' => 
         'Diversos logotypos para Andrea del rubro de  Pastelería  y La Luz del rubro  Publicidad Digital']); 
         Project::create(['name' => 'Banners', 'image' => 'img/projects/banner.jpg', 'category_id' => 5, 
         'link' => asset('img/projects/banner.jpg') , 'fecha' => '2020','description' => 
         'Diversos Banners para  distribución de Servicios y Agua Alcalina  ambos de Distribuidora Lar Servicios']); 
         Project::create(['name' => 'Comunnity Manager', 'image' => 'img/projects/rey-blue.jpg', 'category_id' => 5, 
         'link' => 'https://www.facebook.com/REYBLUE.TEXTIL' ,'fecha' => '2021', 'description' => 
         'Pijamas animadas con modelos variados para todos los gustos y en diferentes calidades de algodón.']);
    
    }
}

<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create(['name' => 'PHP', 'image' => 'img/skills/php.svg' , 'importance' => 1, 'description' => 'El lenguaje en donde dispongo de más experiencia']);
        Skill::create(['name' => 'Laravel', 'image' => 'img/skills/laravel.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en este Framework']);
        Skill::create(['name' => 'Lumen', 'image' => 'img/skills/lumen.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en este Framework back-end']);
        Skill::create(['name' => 'Javascript', 'image' => 'img/skills/javascript.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en este lenguaje']);
        Skill::create(['name' => 'Mysql', 'image' => 'img/skills/mysql.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en este gestor de base de datos']);
        Skill::create(['name' => 'Bootstrap', 'image' => 'img/skills/bootstrap.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en esta libreria']);
        Skill::create(['name' => 'CSS3', 'image' => 'img/skills/css3.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en css3 comprendo sus propiedades']);
        Skill::create(['name' => 'HTML5', 'image' => 'img/skills/html.svg' , 'importance' => 1, 'description' => 'Me desempeño muy bien en esta lenguaje de marcado']);
        Skill::create(['name' => 'Wordpress', 'image' => 'img/skills/wordpress.svg' , 'importance' => 2, 'description' => 'Muy poco me he desempeñado con este CMS']);
        Skill::create(['name' => 'Tailwind', 'image' => 'img/skills/tailwind.svg' , 'importance' => 2, 'description' => 'Muy poco me he desempeñado en este framework']);
        Skill::create(['name' => 'Mongodb', 'image' => 'img/skills/mongodb.svg' , 'importance' => 2, 'description' => 'Muy poco me he desempeñado en este gestor Nosql']);
        Skill::create(['name' => 'Postgresql', 'image' => 'img/skills/postgresql.svg' , 'importance' => 2, 'description' => 'Muy poco me he desempeñado en este gestor ']);
        Skill::create(['name' => 'Java', 'image' => 'img/skills/java.svg' , 'importance' => 2, 'description' => 'Un lenguaje con aprendizaje y experiencia moderada']);
        Skill::create(['name' => 'Apache', 'image' => 'img/skills/apache.svg' , 'importance' => 2, 'description' => 'El servidor que suelo más ultilizar para mis desarrollo']);
        Skill::create(['name' => 'Elementor', 'image' => 'img/skills/elementor.svg' , 'importance' => 2, 'description' => 'Plugins de Wordpress junto con Woocomerce ']);
        Skill::create(['name' => 'Adobe Package', 'image' => 'img/skills/adobe.svg' , 'importance' => 2, 'description' => 'Experiencia moderada en Illustrator, Photoshop']);
        Skill::create(['name' => 'Spring Boot', 'image' => 'img/skills/spring.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con este framework']);
        Skill::create(['name' => 'React', 'image' => 'img/skills/react.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con este framework']);
        Skill::create(['name' => 'Firebase', 'image' => 'img/skills/firebase.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con esta Plataforma']);
        Skill::create(['name' => 'Node Js', 'image' => 'img/skills/nodejs.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con este Framework']);
        Skill::create(['name' => 'Angular', 'image' => 'img/skills/angular.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con este Framework']);
        Skill::create(['name' => 'Aws', 'image' => 'img/skills/angular.svg' , 'importance' => 3, 'description' => 'Me encuentro en Aprendizaje con este Framework']);
        Skill::create(['name' => 'Seguridad', 'image' => 'img/skills/seguridad.svg' , 'importance' => 3, 'description' => 'Conocimiento es Inyección Sql, XSS, DDoS, CSRF y CROSS']);
        Skill::create(['name' => 'UX/UI', 'image' => 'img/skills/ux-ui.svg' , 'importance' => 3, 'description' => 'Para ser un desarrolador más completo']);
    }
}

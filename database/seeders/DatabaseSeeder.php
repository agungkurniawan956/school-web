<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Sarwan Haiban',
        //     'email' => 'sarwan@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        // User::create([
        //     'name' => 'Dede',
        //     'email' => 'dede@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        // User::create([
        //     'name' => 'Wildan Satria',
        //     'email' => 'wildan@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        // Category::create([
        //     'name' => 'Akademik',
        //     'slug' => 'akademik'
        // ]);

        // Category::create([
        //     'name' => 'Prestasi',
        //     'slug' => 'prestasi'
        // ]);

        Berita::factory(28)->create();

        // Berita::create([
        //     'title' => 'Wisuda Tp.2O21/2O22',
        //     'slug' => 'wisuda-tp-2O21-2O22',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!',
        //     'user_id' => '1',
        //     'category_id' => '1'
        // ]);

        // Berita::create([
        //     'title' => 'Pergantian Pengurus Tp.2O21/2O22',
        //     'slug' => 'pergantian-pengurus-tp-2O21-2O22',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p>',
        //     'user_id' => '2',
        //     'category_id' => '1'
        // ]);

        // Berita::create([
        //     'title' => 'Juara Umum Tp.2O21/2O22',
        //     'slug' => 'juara-umum-tp-2O21-2O22',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p>',
        //     'user_id' => '1',
        //     'category_id' => '2'
        // ]);

        // Berita::create([
        //     'title' => 'Juara Pramuka',
        //     'slug' => 'juara-pramuka',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!</p>',
        //     'user_id' => '2',
        //     'category_id' => '2'
        // ]);
    }
}

// Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ab corporis nesciunt doloremque reprehenderit quibusdam est porro, placeat, incidunt cum perferendis odit recusandae unde laboriosam esse possimus soluta accusamus. Fugiat quaerat libero beatae ipsam, dolore cum, iste fuga a hic autem est expedita dolorum facilis tempora magnam molestiae voluptate. Atque aliquam consectetur voluptate neque minus natus, numquam tempore maxime soluta eveniet eligendi sed odit ipsa id nostrum necessitatibus qui. Earum, nostrum? Voluptatibus natus velit aperiam veniam iure nemo ratione, ab illum doloribus assumenda nesciunt obcaecati consequuntur? Odit placeat alias error, doloremque ex earum repellat magni! Cum omnis quibusdam, beatae alias libero debitis inventore impedit error nam autem ad quo praesentium necessitatibus!
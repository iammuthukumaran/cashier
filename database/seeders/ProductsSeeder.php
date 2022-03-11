<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('Products')->delete();
        
        \DB::table('Products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'LEE COOPER',
                'price' => 899,
                'description' => '
                Showcasing varying trends and changing themes, Lee Cooper sunglasses dare the glare in style. Here presenting a houseful of classic aviators, voguish wayfarers, chic cat-eye, and retro shades that you can own for a timeless look.',
                'created_at' => '2022-03-11 09:59:48',
                'updated_at' => '2022-03-11 09:59:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'DNMX',
                'price' => 896,
                'description' => 'Splatter your casual wardrobe with a splash of style with clothing from DNMX. This trendy brand offers absolute fashion along with unbeatable comfort for the style happy.',
                'created_at' => '2022-03-11 09:59:48',
                'updated_at' => '2022-03-11 09:59:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ECKO',
                'price' => 1133,
                'description' => 'Product colour may slightly vary due to photographic lighting sources or your monitor settings',
                'created_at' => '2022-03-11 09:59:48',
                'updated_at' => '2022-03-11 09:59:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Polo T-shirt with Signature Branding',
                'price' => 399,
                'description' => 'Accented by the tipping along the collar and sleeve hems, this classic polo T-shirt makes for an endlessly preppy and versatile casual wear option.',
                'created_at' => '2022-03-11 09:59:48',
                'updated_at' => '2022-03-11 09:59:48',
            ),
        ));
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mattress;
use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    //Utiliser les factory et create pour remplir la DB

    public function run(): void
    {
        $size1 = Size::factory()->create(['name' => '90 X 190']);
        $size2 = Size::factory()->create(['name' => '140 X 190']);
        $size3 = Size::factory()->create(['name' => '160 X 200']);
        $size4 = Size::factory()->create(['name' => '180 X 200']);
        $size5 = Size::factory()->create(['name' => '200 X 200']);


        $epedamc = Mattress::factory()->create([
            'image' => 'https://m.media-amazon.com/images/I/61XsoHN5liL.jpg',
            'brand' => 'EPEDA',
            'slug' => Str::of('EPEDACONFORT+')->slug(),
            'description' => 'Matelas Confort 90 X 190',
            'price' => '759',
            'stock' => '25',

        ]);
        $epedamc->sizes()->attach([$size1->id, $size2->id, $size3->id, $size4->id, $size5->id]);

        $dreamwayma = Mattress::factory()->create([
            'image' => 'https://www.cdiscount.com/pdt2/7/7/0/1/700x700/auc5902846910770/rw/matelas-mousse-90x180-sorrento-pour-vos-enfants.jpg',
            'brand' => 'DREAMWAY',
            'slug' => Str::of('DREAMWAYMA')->slug(),
            'description' => 'Matelas Assurance 90 X 190',
            'price' => '809',
            'stock' => '10',

        ]);
        $dreamwayma->sizes()->attach([$size1->id, $size2->id, $size3->id, $size4->id, $size5->id]);

        $bultexme = Mattress::factory()->create([
            'image' => 'https://media.conforama.fr/m/export/Medias/600000/90000/9000/500/60/G_699563_Y.jpg',
            'brand' => 'BULTEX',
            'slug' => Str::of('BULTEXME')->slug(),
            'description' => 'Matelas Essentiel 140 X 190',
            'price' => '759',
            'stock' => '4',

        ]);
        $bultexme->sizes()->attach([$size1->id, $size2->id, $size3->id, $size4->id, $size5->id]);

        $epedamp = Mattress::factory()->create([
            'image' => 'https://epeda.fr/wp-content/uploads/2022/02/epeda_boxspring-produit.jpg',
            'brand' => 'EPEDA',
            'slug' => Str::of('EPEDAMP')->slug(),
            'description' => 'Matelas Prestige 160 X 190',
            'price' => '1019',
            'stock' => '17',

        ]);
        $epedamp->sizes()->attach([$size1->id, $size2->id, $size3->id, $size4->id, $size5->id]);

    }
}

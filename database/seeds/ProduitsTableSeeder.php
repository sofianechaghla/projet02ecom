<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "T-shirt Gonnies";
        $produit->prix_ht = 25;
        $produit->description = " T-shirt du film les goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt Bartt_simpsons";
        $produit->prix_ht = 39;
        $produit->description = " T-shirt les simpsons";
        $produit->photo_principale = "Bartt_simpsons.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt hulk";
        $produit->prix_ht = 27;
        $produit->description = " T-shirt du film hulk";
        $produit->photo_principale = "hulk.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt M.happy";
        $produit->prix_ht = 9;
        $produit->description = " T-shirt qui rend heureux";
        $produit->photo_principale = "happy.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt Star_Strek";
        $produit->prix_ht = 20;
        $produit->description = " T-shirt du film Star Trek ";
        $produit->photo_principale = "star_strek_kirk.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt dewey ";
        $produit->prix_ht = 30;
        $produit->description = " T-shirt de la serie Malcom";
        $produit->photo_principale = "little_miss_sunshine.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt Super-Man";
        $produit->prix_ht = 25;
        $produit->description = " T-shirt du film  Super-Man";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt wonder_woman";
        $produit->prix_ht = 27;
        $produit->description = " T-shirt du film wonder_woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-shirt Kruty_simpsons";
        $produit->prix_ht = 27;
        $produit->description = " T-shirt de la serie les Simpsons";
        $produit->photo_principale = "Krusty_simpsons.jpg";
        $produit->save();
      
    }
}

 
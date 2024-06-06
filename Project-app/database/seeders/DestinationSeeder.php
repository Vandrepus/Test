<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run()
{
    Destination::create([
        'heading' => 'Dubai',
        'text' => 'Everything feels extra spectacular in Dubai—from the ultra-modern Burj Khalifa to the souks and malls filled with gold and jewelry vendors. It is a place where if you can dream it, you can do it: Whether that means skiing indoors, dune-surfing in the desert, or zip-lining above the city. But it is not all glitz and adrenaline-pumping action. Stroll through the winding alleys of Al Fahidi Historical Neighborhood to see what Dubai was like during the mid-19th century. Or visit the Jumeirah Mosque (one of the few mosques open to non-Muslims) and learn about Emirati culture. Spot some street art on Jumeirah Beach Road and grab a bite at a shawarma shop, or spend the day hunting for spices and perfume then round things out with a Michelin-starred meal. You can really do it all and we haveve got more recs, below.', // Add the description of Dubai
        'img1' => 'Dubai.jpg',
        'img2' => 'Dubai1.jpeg',
    ]);

    //Add other locations here
}

}

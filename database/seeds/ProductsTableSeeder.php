<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name' => 'ALESIS DM LITE PORTABLE ELECTRONIC DRUMSET',
            'description' => '• 10 ready-to-play classic and modern kits—over 200 drum and cymbal sounds (fully accessible by external MIDI sources)
• 1/8" stereo aux input for jamming to your favorite tracks
• USB/MIDI connection for use with audio recording software and virtual instruments
• 1/4" stereo outs connect to any sound system
',
            'category_id' => 1,
            'barcode' => '123456789',
            'image' => 'portabledrums.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'FERNANDO OV-100 VIOLIN OUT ¼',
            'description' => '•Model: OV-100
•Attributes: 1/4 Size, Natural
•Body: Solid spruce top, solid maple back and sides
•Bridge: Treated
•Quality strings
•4 micro-tuners
', 
            'category_id' => 1,
            'barcode' => '32893482',
            'image' => 'violin.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'ZILDJIAN 5AWA 5A WOOD ANTI-VIBE DRUMSTICKS',
            'description' => '• CATEGORY: ANTI-VIBE™ SERIES
• SKU: 5AWA
• LENGTH: 16
• DIAMETER: 0.56
• WOOD TYPE: HICKORY
• TIP SHAPE: OVAL
• TIP TYPE: WOOD
• TIP COLOR: NATURAL
', 
            'category_id' => 1,
            'barcode' => '323849202',
            'image' => 'drumsticks.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'MAYA DRUM SET WITH CYMBALS',
            'description' => 'SKU: MA093MEAA5W86EANPH-12427727
Model: 5pc drum set
Size (L x W x H cm): 76 x 59 x 56
Weight (kg): 20
Set Size: 5
Warranty type: Lazada refund warranty only
',
            'category_id' => 2,
            'barcode' => '8329332',
            'image' => 'drums.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'ACOUSTIC GUITAR',
            'description' => 'acoustic 6-strings guitar',
            'category_id' => 2, 
            'barcode' => '238949384',
            'image' => 'acoustic4.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'ELECTRIC GUITAR',
            'description' => 'A typical electric guitar with bag included',
            'category_id' => 2,
            'barcode' => '023981723',
            'image' => 'electric.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'DAVIS BEAT BOX CAJON WITH BAG',
            'description' => 'SKU: DA483MEAA286ELANPH-4425800
Model: CLICKEE-beatboxmaru
Size (L x W x H cm): 42 x 30 x 30
Weight (kg): 2
Warranty type: Lazada refund warranty only
',
            'category_id' => 2,
            'barcode' => '023981711',
            'image' => 'beatbox.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'BLACK BAMBOO CHINESE PIPE',
            'description' => 'SKU: NO649MEAA3NUBBANPH-7691795
Model: WiseBuy-BZ336_W
Warranty type: Lazada refund warranty only
',
            'category_id' => 2,
            'barcode' => '2398172l2',
            'image' => 'chinese.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'PROFESSIONAL OBOE C KEY',
            'description' => 'SKU: OE721MEAA6CFO9ANPH-13270580
Model: TOMTOP-TPD16A85YDTT-I2510
Size (L x W x H cm): 35x21x8
Weight (kg): 1.86
Warranty type: Lazada refund warranty only
',
            'category_id' => 2,
            'barcode' => '2398172l2',
            'image' => 'oboe.jpg',
        ]);
    }
}
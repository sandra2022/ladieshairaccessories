<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Bow',
            'price'=>'$49.10',
            'description'=>'The bow has been a hair accessory way before Minnie Mouse even came into the picture. You can get ribbons to tie a bow on your hair. You also get bows with soft velcro on them, so you can just attach it to your hair, and go!',
            'category'=>'Oaoleer 10pcs 3.5" Fabric Ribbon Hair Bows with Clips for Baby Toddler Womens',
    
            'gallery'=>'https://m.media-amazon.com/images/I/61Iai3lvibL.jpg'
        ],
        [
            'name'=>'Hair Scrunchies',
            'price'=>'$100',
            'description'=>'These hair scrunchies are available in different colors and you can wear them by matching the color of your outfit. They are made with a soft velvet material that does not hurt or tear your hair',
            'category'=>'Homerove 60pcs Hair Scrunchies Velvet Elastic Hair Bands Scrunchy Colorful Hair Ties Hair Ropes for Women  Hair Accessories 60 Assorted Colors Scrunchies',
             'gallery'=>'https://m.media-amazon.com/images/I/61gYZFofVBL.jpg'
        ],
        [
            'name'=>'Hairbands',
            'price'=>'$250',
            'description'=>' Its a huge misconception that hairbands are only for children. Why these days even men are sporting them! With a wide variety of different styles to choose from I guarantee you will find what you’re looking for.',
            'category'=>'Narrow Satin Headbands - 2.5 cm - 12 Beautiful Hard Headbands by CoverYourHair',
            'gallery'=>'https://m.media-amazon.com/images/I/51SJm8Gy-WL.jpg'
        ],
        [
            'name'=>'Elastic Bands',
            'price'=>'$510',
            'description'=>'Elastic bands are an essential item for me. You never know when you need to tie your hair! Now you can find some really beautifully decorated elastic bands.',
            'category'=>'4 Pack Women Headband Boho Floal Style Criss Cross Head Wrap Hair Band Set1',
            'gallery'=>'https://m.media-amazon.com/images/I/61iTzX9AR1L.jpg'
        ],
        [
            'name'=>'Headbands',
            'price'=>'$799',
            'description'=>'Headbands werent only used by hippies back in the day – they have been mentioned in European and Mesopotamian history books! And now, they are here to stay.',
            'category'=>' Teenitor Rhinestone Beaded Elastic Headband, Fashionable Handmade Crystal Beaded Elastic hairbands Lady Women Girls Hair Jewelry Accessories, 20-26.8 and 5 Pieces',
            'gallery'=>'https://m.media-amazon.com/images/I/61iTzX9AR1L.jpg'
        ],
        [
            'name'=>'Pearls',
            'price'=>'$140',
            'description'=>'Pearls are fast becoming one of the most classy hair accessories of all time. Remember that pearl necklace you bought but the hooks came off? Well now you can use that as an accessory to make your bun look even more dashing!',
             'category'=>' Dxhycc 20pcs Bridal Hair Pins Pearl Flower Crystal Wedding Hair Clips Hair Accessories',
              'gallery'=>'https://m.media-amazon.com/images/I/51dascSSTBL.jpg'
        ],
        [
            'name'=>'Flowers',
            'price'=>'$999',
            'description'=>'Nothing makes a woman feel prettier than flowers. Whether it’s a real flower artificial flower or a rhinestone flower its sure to spruce up your look.',
            'category'=>' Womens stylish color flowers',
            'gallery'=>'https://cdn2.stylecraze.com/wp-content/uploads/2013/07/Flowers.jpg.webp'
        ],
        [
            'name'=>'Hairpins',
            'price'=>'$914',
            'description'=>'While pins are efficient they also look great. Its amazing how one small and simple pin can spice up your entire hairstyle. You can also find detached hair pins now and they look incredible.',
            'category'=>' DOOPOOTOO Metal Long Arrow Round Hoop Set Pierced Barrette Hair Fork Stick Slide Tuck Comb Clip Shawl Scarf Pin Brooch Hairpin Styling Ponytail Holder Bun Maker Tool Accessories GIFT',
            'gallery'=>'https://cdn2.stylecraze.com/wp-content/uploads/2013/07/Flowers.jpg.webp'
        ],
        [
            'name'=>'Tiara',
            'price'=>'$200',
            'description'=>'Cmon dont lie now. You know you feel like a complete princess while wearing that crown. Whether its for your wedding day or a party I guarantee you can find an elegant tiara that is not OTT and childish but will bring out the queen in you.',
             'category'=>'SWEETV Crystal Princess Crown Rhinestone Tiara Bridal Head Jewelry Wedding Hair Accessories and Gold',
              'gallery'=>'https://m.media-amazon.com/images/I/418tkz383GL.jpg'
        ],
        [
            'name'=>'Hair Jewellery',
            'price'=>'$455',
            'description'=>'Yes! There isjewellery for your hair now! Indians have always loved to wear the hair jewellery called Jhapta. These bijouteries give you a certain French la vie en rose look.',
             'category'=>'DRESHOW Head Chain Hair Accessories Bohemian Diamond Pearl Tassel Hair Band Alice Band Gold Leaf Chain Headband 3 Pack',
              'gallery'=>'https://m.media-amazon.com/images/I/51arMSiAdCL.jpg'
        ]
        ]);
    }
}

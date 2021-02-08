<?php

use App\Models\ShopProduct;
use Illuminate\Database\Seeder;

class ShopProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('name' => 'Пирог "Карамельно-яблочный"','price' => '160','img' => 'images/menu/pirogi/apple-karam.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Карамельный"','price' => '100','img' => 'images/menu/pirogi/karam.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Яблочный"','price' => '50','img' => 'images/menu/pirogi/apple.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Вишневый пирог','price' => '820','img' => 'images/menu/pirogi/vishnevyj.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Бабушкин торт"','price' => '1340','img' => 'images/menu/pirogi/babushkin-tort.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Бретонский яблочный"','price' => '900','img' => 'images/menu/pirogi/bretonskij.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Яблочный гурман','price' => '990','img' => 'images/menu/pirogi/yablochnyj-gurman.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Карамельный" (Бельгия)','price' => '1760','img' => 'images/menu/pirogi/karamelno-yablochnyij.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Гурман яблочный','price' => '1760','img' => 'images/menu/pirogi/gurman-yablochnyj.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог Малиновый с миндалем','price' => '550','img' => 'images/menu/pirogi/malinovyj-s-mindalem.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог "Кентукки Пай"','price' => '2600','img' => 'images/menu/pirogi/kentucky-pie.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),
            array('name' => 'Пирог с орехами пекан и карамелью','price' => '2860','img' => 'images/menu/pirogi/s-orehami-pekan.jpg', 'description' => 'Нужно придумать описание', 'shop_category_id' => 1),


            array('name' => 'Круассан с заварным кремом','price' => '260','img' => 'images/menu/croissants/kruassan-otpechennyj-s-zavarnym-kremom.jpg', 'shop_category_id' => 2),
            array('name' => 'Круассан с шоколадной начинкой','price' => '310','img' => 'images/menu/croissants/kruassan-s-shokoladnoj-nachinkoj.jpg', 'shop_category_id' => 2),
            array('name' => 'Круассан с миндалем','price' => '390','img' => 'images/menu/croissants/kruassan-s-mindalem.jpg', 'shop_category_id' => 2),
            array('name' => 'Круассан "Ягодный"','price' => '1480','img' => 'images/menu/croissants/kruassan-yagodnyj.jpg', 'shop_category_id' => 2),
            array('name' => 'Круассан с шоколадной начинкой','price' => '1530','img' => 'images/menu/croissants/kruassan-s-shoko-nachinkoj.jpg', 'shop_category_id' => 2),
            array('name' => 'Круассан "Мёд-имбирь"','price' => '1480','img' => 'images/menu/croissants/kruassan-med-imbir.jpg', 'shop_category_id' => 2),


            array('name' => 'Брауни','price' => '200','img' => 'images/menu/cakes/browny.jpg', 'shop_category_id' => 3),
            array('name' => 'Эклер','price' => '200','img' => 'images/menu/cakes/ecler.jpg', 'shop_category_id' => 3),
            array('name' => 'Корзинки','price' => '250','img' => 'images/menu/cakes/korzinki.jpg', 'shop_category_id' => 3),
            array('name' => 'Макарон','price' => '300','img' => 'images/menu/cakes/makaron.jpg', 'shop_category_id' => 3),
            array('name' => 'Картошка','price' => '125','img' => 'images/menu/cakes/potato.jpg', 'shop_category_id' => 3),
            array('name' => 'Торт «Сметанник»','price' => '340','img' => 'images/menu/cakes/smetannik.jpg', 'shop_category_id' => 3),
            array('name' => 'Пирожное Шоколадное суфле','price' => '390','img' => 'images/menu/cakes/pirozhnoe-shokoladnoe.jpg', 'shop_category_id' => 3),
            array('name' => 'Профитроли в шоколаде мини','price' => '350','img' => 'images/menu/cakes/shokoladnye-profitroli.jpg', 'shop_category_id' => 3),
            array('name' => 'Мини ассорти','price' => '420','img' => 'images/menu/cakes/mini-assorti.jpg', 'shop_category_id' => 3),
            array('name' => 'Пирожные "Домино"','price' => '430','img' => 'images/menu/cakes/pirozhnye-domino.jpg', 'shop_category_id' => 3),
            array('name' => 'Тарталетка малиновая','price' => '440','img' => 'images/menu/cakes/tartaletka-malinovaya.jpg', 'shop_category_id' => 3),
            array('name' => 'Пирожное "Графские развалины"','price' => '440','img' => 'images/menu/cakes/grafskie-razvaliny.jpg', 'shop_category_id' => 3),
            array('name' => 'Профитроли со сливками','price' => '450','img' => 'images/menu/cakes/profitroli-so-slivkami.jpg', 'shop_category_id' => 3),
            array('name' => 'Маффин Шоколадный','price' => '540','img' => 'images/menu/cakes/maffin-shokoladnyj.jpg', 'shop_category_id' => 3),
            array('name' => 'Пирожное "Карамельно-ореховое"','price' => '666','img' => 'images/menu/cakes/pirozhnoe-karamelno-orehovoe.jpg', 'shop_category_id' => 3),


            array('name' => 'Торт шоколадный','price' => '2000','img' => 'images/menu/torties/choco.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт апельсиновый','price' => '1500','img' => 'images/menu/torties/orange.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Пьемонт"','price' => '250','img' => 'images/menu/torties/tort-pemont.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Мусс три шоколада"','price' => '260','img' => 'images/menu/torties/muss-3-shokolada.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт Брусничный','price' => '340','img' => 'images/menu/torties/tort-brusnichnyj-s-belym-shokoladom.jpg', 'shop_category_id' => 4),
            array('name' => 'Медовик мини','price' => '440','img' => 'images/menu/torties/medovik-mini.jpg', 'shop_category_id' => 4),
            array('name' => 'Пирог малиновый с миндалем','price' => '640','img' => 'images/menu/torties/pirog-malinovyj-s-mindalem.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Кассата с марципаном"','price' => '900','img' => 'images/menu/torties/tort-brusnichno-kremovyj.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Шоколадно-вишнёвый"','price' => '900','img' => 'images/menu/torties/tort-shokoladno-vishnevyj.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт брусничный','price' => '940','img' => 'images/menu/torties/tort-brusnichnyj.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Ванильно-карамельный"','price' => '970','img' => 'images/menu/torties/tort-vanilno-karamelnyj.jpg', 'shop_category_id' => 4),
            array('name' => 'Медовик','price' => '1070','img' => 'images/menu/torties/medovik.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт "Бананово-шоколадный"','price' => '1130','img' => 'images/menu/torties/tort-bananovo-shokoladnyj.jpg', 'shop_category_id' => 4),
            array('name' => 'Торт «Черный лес»','price' => '1220','img' => 'images/menu/torties/tort-chernyj-les.jpg', 'shop_category_id' => 4),


            array('name' => 'Печенье с шоколадными чипсами','price' => '3800','img' => 'images/menu/cupcakes/pechene-kukis.jpg', 'shop_category_id' => 5),
            array('name' => 'Миндальное печенье','price' => '1580','img' => 'images/menu/cupcakes/mandorla.jpg', 'shop_category_id' => 5),
            array('name' => 'Вафли сахарные Льежские','price' => '2040','img' => 'images/menu/cupcakes/vafli-saharnye-lezhskaya.jpg', 'shop_category_id' => 5),
            array('name' => 'Овсяное Печенье Кукис','price' => '3800','img' => 'images/menu/cupcakes/ovsyanoe-pechene.jpg', 'shop_category_id' => 5),


            array('name' => 'Английский кекс','price' => '500','img' => 'images/menu/cookies/eng.jpg', 'shop_category_id' => 6),
            array('name' => 'Французский кекс','price' => '750','img' => 'images/menu/cookies/franc.jpg', 'shop_category_id' => 6),
            array('name' => 'Немецкий кекс','price' => '600','img' => 'images/menu/cookies/ger.jpg', 'shop_category_id' => 6),
            array('name' => 'Ягодные капкейки','price' => '2280','img' => 'images/menu/cookies/yagody.jpg', 'shop_category_id' => 6),
            array('name' => 'Ореховые капкейки','price' => '1650','img' => 'images/menu/cookies/orehovyj.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки Сникерс','price' => '1650','img' => 'images/menu/cookies/snikers.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки Мега-шоколад','price' => '1650','img' => 'images/menu/cookies/megachoco.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки Классический шоколад','price' => '1650','img' => 'images/menu/cookies/classic-choco.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки Клубника-ваниль','price' => '1650','img' => 'images/menu/cookies/vanilla-strawberry.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки Малина','price' => '1650','img' => 'images/menu/cookies/malina.jpg', 'shop_category_id' => 6),
            array('name' => 'Капкейки ассорти','price' => '1650','img' => 'images/menu/cookies/yagody.jpg', 'shop_category_id' => 6),


            array('name' => 'Тирамису маскарпоне','price' => '350','img' => 'images/menu/tiramisu/tiramisu-maskarpone.jpg', 'shop_category_id' => 7),
            array('name' => 'Далия Тирамису','price' => '1190','img' => 'images/menu/tiramisu/daliya-tiramisu.jpg', 'shop_category_id' => 7),
            array('name' => 'Тирамису маскарпоне (9 шт.)','price' => '1190','img' => 'images/menu/tiramisu/tiramisu-maskarpona.jpg', 'shop_category_id' => 7),
            array('name' => 'Торт Тирамису (прямоугольный)','price' => '1590','img' => 'images/menu/tiramisu/tort-tiramisu.jpg', 'shop_category_id' => 7),
            array('name' => 'Тирамису в креманке','price' => '1660','img' => 'images/menu/tiramisu/tiramisu-v-kremanke.jpg', 'shop_category_id' => 7),


            array('name' => 'Чизкейк "Груша-Горгонзолла"','price' => '3200','img' => 'images/menu/cheesecakes/Gorgonzolla.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк с белым шоколадом','price' => '4200','img' => 'images/menu/cheesecakes/Green-Tea.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Малина-Миндаль"','price' => '3400','img' => 'images/menu/cheesecakes/Mindale.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк Нью-Йорк','price' => '4500','img' => 'images/menu/cheesecakes/New-York.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Малина-Пармезан"','price' => '3700','img' => 'images/menu/cheesecakes/Parmezane.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк с белым шоколадом','price' => '3100','img' => 'images/menu/cheesecakes/white-choco.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Фрезье"','price' => '5000','img' => 'images/menu/cheesecakes/Freze.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк «Со свежей клубникой»','price' => '830','img' => 'images/menu/cheesecakes/pirozhnoe-tartaletka.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Шоколадный"','price' => '990','img' => 'images/menu/cheesecakes/chizkejk-shokoladnyj.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Малиновый"','price' => '990','img' => 'images/menu/cheesecakes/chizkejk-malinovyj.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Карамельный"','price' => '990','img' => 'images/menu/cheesecakes/chizkejk-karamelnyj.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Клубничный"','price' => '990','img' => 'images/menu/cheesecakes/chizkejk-klubnichnyj.jpg', 'shop_category_id' => 8),
            array('name' => 'Чизкейк "Нью-Йорк"','price' => '990','img' => 'images/menu/cheesecakes/chizkejk-nyu-jork.jpg', 'shop_category_id' => 8),
        ];

        foreach ($data as $datum) {
            ShopProduct::create($datum)->save();
        }

//        factory(ShopProduct::class, 345)->create()->make();
    }
}

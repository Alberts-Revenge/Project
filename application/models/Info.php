<?php

class Info extends CI_Model {

    // jediHunt mock data
    var $data_jedihunt = array(
        array(
            'id' => '1',
            'category' => 'jedihunt',
            'planet' => 'Belsavis',
            'pic' => '../images/belsavis.png',
            'info' => 'Belsavis, also known as Plawal, was a planet in the Ninth Quadrant, a region of the Bozhnee sector. Ice-covered, its average temperature was in the -50s. It was located on the edge of the Senex sector, at one end of the Belsavis Run.'),
        array(
            'id' => '2',
            'category' => 'jedihunt',
            'planet' => 'Coruscant',
            'pic' => '../images/coruscant.jpg',
            'info' => 'Coruscant (pronounced, originally called Notron, also known as Imperial Center or the Queen of the Core, was a planet located in the Galactic Core. It was generally agreed that Coruscant was, during most of galactic history, the most politically important world in the galaxy.'),
        array(
            'id' => '3',
            'category' => 'jedihunt',
            'planet' => 'Tython',
            'pic' => '../images/tython.jpg',
            'info' => 'Tython was a planet in the Tython system of the Deep Core that played a pivotal role in the histories of the Jedaii Order and its successor, the Jedi Order. A verdant world that was incredibly rich in the Force, Tython was inhabited by an unknown species hundreds of thousands of years before the rise of the Galactic Empire, and it was visited by both the Gree and Kwa, two of the earliest species to have achieved interstellar travel.'),
        array(
            'id' => '4',
            'category' => 'jedihunt',
            'planet' => 'Ossus',
            'pic' => '../images/ossus.jpg',
            'info' => 'Ossus, originally called Idux whilst under the control of Xim\'s empire, was the third planet in the Adega system in the Auril sector. Known to the galaxy since before 25,000 BBY, when the Jedi expanded there from the planet Tython and established a Jedi Academy, Ossus would become a popular world of the Galactic Republic.')
    );
        // tombs mock data

    var $data_tombs = array(
        array(
            'id' => '1',
            'category' => 'tombs',
            'planet' => 'Aargonar',
            'pic' => '../images/aargonar.jpg',
            'info' => 'Aargonar was a dusty, desert-climate planet located in the Borderlands Regions of the Mid Rim. '),
        array(
            'id' => '2',
            'category' => 'tombs',
            'planet' => 'Athiss',
            'pic' => '../images/athiss.png',
            'info' => 'Athiss was the second planet in the Loro Babis system. It was located on the Descri Wris and was close to Korriz and Ziost.'),
        array(
            'id' => '3',
            'category' => 'tombs',
            'planet' => 'Yavin Prime',
            'pic' => '../images/yavin.jpg',
            'info' => 'Yavin Prime, also known as Yavin (Yavin pronounced: YAH-vin), was a bright red gas giant in the Gordian Reach sector (part of the Bright Jewel Oversector).'),
        array(
            'id' => '4',
            'category' => 'tombs',
            'planet' => 'Kashyyyk',
            'pic' => '../images/kashyyyk.jpg',
            'info' => 'Kashyyyk (see pronunciation), also known as Wookiee Planet C, Edean, G5-623, and Wookiee World, was a Mid Rim planet.')
    );
        // torturer mock data

//    var $data_torturer = array(
//        array(
//            'id' => '1',
//            'category' => 'torturer',
//            'planet' => 'Ryloth',
//            'pic' => '../images/ryloth.jpg',
//            'info' => 'Ryloth, also known as Twi\'lek, and Twi\'lek Prime,[9] was the harsh, rocky homeworld of the Twi\'leks, an Outer Rim Territories world located on the Corellian Run and forming one endpoint of the Death Wind Corridor.'),
//        array(
//            'id' => '2',
//            'category' => 'torturer',
//            'planet' => 'Taris',
//            'pic' => '../images/taris.png',
//            'info' => 'Taris was an urban planet in the fifth orbit of its star, located in the Taris system, within the Ojoster sector, of the Outer Rim Territories, in turn Taris was orbited by four moons, including Rogue. The term Tarisian was used to describe people and products from the planet.'),
//        array(
//            'id' => '3',
//            'category' => 'torturer',
//            'planet' => 'Dromund Kaas',
//            'pic' => '../images/dromund_Kaas.png',
//            'info' => 'Dromund Kaas was the third planet in the Dromund system, a star system in the Sith Worlds region of the Outer Rim Territories\'s Esstran sector. '),
//        array(
//            'id' => '4',
//            'category' => 'torturer',
//            'planet' => 'Korriban',
//            'pic' => '../images/korriban.png',
//            'info' => 'Korriban, known as Pesegam during the reign of Xim, and also known as Moraband by the time of the Clone Wars, was the sole planet in the Horuset system, located across the galaxy from Koros Major.')
//    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    

    // retrieve all of the planets for jediHunt
    public function all_for_jedihunt() {
        return $this->data_jedihunt;
    }

    // retrieve all of the planets for tombs
    public function all_for_tombs() {
        return $this->data_tombs;
    }

    // retrieve all of the planets for torturer
//    public function all_for_torturer() {
//        return $this->data_torturer;
//    }


}

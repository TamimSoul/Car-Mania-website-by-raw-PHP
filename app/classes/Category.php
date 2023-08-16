<?php


namespace App\classes;


class Category
{

    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0=>[
                'id'=> 1,
                'name'=> 'Sports Car',
                'image'=> 'assets/img/a.jpg',
            ],
            1=>[
                'id'=> 2,
                'name'=> 'Luxury Car',
                'image'=> 'assets/img/b.jpg',
            ],
            2=>[
                'id'=> 3,
                'name'=> 'New Arrival',
                'image'=> 'assets/img/c.jpg',
            ],
            3=>[
                'id'=> 4,
                'name'=> 'Shelly Fashion',
                'image'=> 'assets/img/d.jpg',
            ],
        ];
    }
    public function  getAllCategory()
    {
        return $this->categories;
    }


}
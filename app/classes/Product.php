<?php


namespace App\classes;


class Product
{
     public $products = [];

     public function __construct()
     {
         $this->products = [
           0 => [
               'id'           => 1,
               'category_id'  => 1,
               'name'         => 'Sports Car',
               'price'        => 2500000,
               'description'  => 'High Capacity',
               'image' => 'assets/img/p1.jpg'
           ],
           1 => [
               'id'           => 2,
               'category_id'  => 1,
               'name'         => 'Luxury Car',
               'price'        => 2500000,
               'description'  => 'High Capacity',
               'image' => 'assets/img/p2.jpg'
           ],
           2 => [
               'id'           => 3,
               'category_id'  => 2,
               'name'         => 'New Car',
               'price'        => 2500000,
               'description'  => 'High Capacity',
               'image' => 'assets/img/p3.jpg'
           ],
           3 => [
               'id'           => 4,
               'category_id'  => 2,
               'name'         => 'Old Car',
               'price'        => 2500000,
               'description'  => 'High Capacity',
               'image' => 'assets/img/p4.jpg'
           ],
           4 => [
               'id'           => 5,
               'category_id'  => 3,
               'name'         => 'Shelly Car',
               'price'        => 2500000,
               'description'  => 'High Capacity',
               'image' => 'assets/img/p5.jpg'
           ],
         ];

     }
    public function  getAllProduct()
    {
        return $this->products;
    }
}
<?php
require_once "./config/db.php";

class Product {

    private $db;

    public function __construct() 
    {
        $this->db = Database::getInstance("orange_store");
    }

    function getProducts () {
        
        $products = $this->db->query('SELECT * FROM products');
        $products = $products->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
}

// $products = [
//     [
//         'id' => '1',
//         'name' => 'Al Nashama Orange 7',
//         'price' => '13',
//         'description' => 'Orange 7 Special Prepaid Line',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '2',
//         'name' => 'Orange 8 Max',
//         'price' => '14',
//         'description' => 'Trendy, 50% extra GB',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '3',
//         'name' => 'Orange 9 Max',
//         'price' => '16',
//         'description' => 'Trendy, 50% extra GB',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '4',
//         'name' => 'Orange 11 Max',
//         'price' => '18',
//         'description' => 'Trendy, 50% extra GB',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '5',
//         'name' => 'Orange 11 5G',
//         'price' => '18',
//         'description' => 'Trendy, 50% extra GB, Orange 11 5G - Orange Prepaid Phone Plan',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '6',
//         'name' => 'Orange 13 Max',
//         'price' => '21',
//         'description' => 'Trendy, 50% extra GB',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ],
//     [
//         'id' => '7',
//         'name' => 'test',
//         'price' => '20',
//         'description' => 'test',
//         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
//     ]
// ];
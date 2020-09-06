<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            [
                'name' => 'Margherita',
                'description' => 'Tomato sauce, mozzarella, and oregano.',
                'image_path' => '/images/pizzas/pizza1.jpg',
                'price' => [
                    'small' => '10',
                    'medium' => '13',
                    'large' => '16',
                    'xlarge' => '20'
                ],
            ],
            [
                'name' => 'Marinara',
                'description' => 'Tomato sauce, garlic and basil.',
                'image_path' => '/images/pizzas/pizza2.jpg',
                'price' => [
                    'small' => '15',
                    'medium' => '20',
                    'large' => '23',
                    'xlarge' => '26'
                ],
            ],
            [
                'name' => 'Quattro Stagioni',
                'description' => 'omato sauce, mozzarella, mushrooms, ham, artichokes, olives, and oregano.',
                'image_path' => '/images/pizzas/pizza3.jpg',
                'price' => [
                    'small' => '12',
                    'medium' => '14',
                    'large' => '17',
                    'xlarge' => '20'
                ],
            ],
            [
                'name' => 'Carbonara',
                'description' => ' Tomato sauce, mozzarella, parmesan, eggs, and bacon',
                'image_path' => '/images/pizzas/pizza4.jpg',
                'price' => [
                    'small' => '3',
                    'medium' => '6',
                    'large' => '10',
                    'xlarge' => '15'
                ],
            ],
            [
                'name' => 'Frutti di Mare',
                'description' => 'Tomato sauce and seafood',
                'image_path' => '/images/pizzas/pizza5.jpg',
                'price' => [
                    'small' => '10',
                    'medium' => '13',
                    'large' => '15',
                    'xlarge' => '16'
                ],
            ],
            [
                'name' => 'Quattro Formaggi',
                'description' => 'Tomato sauce, mozzarella, parmesan, gorgonzola cheese, artichokes, and oregano',
                'image_path' => '/images/pizzas/pizza6.jpg',
                'price' => [
                    'small' => '7',
                    'medium' => '10',
                    'large' => '12',
                    'xlarge' => '15'
                ],
            ],
            [
                'name' => 'Crudo',
                'description' => 'Tomato sauce, mozzarella and Parma ham',
                'image_path' => '/images/pizzas/pizza7.jpg',
                'price' => [
                    'small' => '12',
                    'medium' => '15',
                    'large' => '16',
                    'xlarge' => '20'
                ],
            ],
            [
                'name' => 'Napoletana',
                'description' => 'Tomato sauce, mozzarella, oregano, anchovies',
                'image_path' => '/images/pizzas/pizza8.jpg',
                'price' => [
                    'small' => '12',
                    'medium' => '16',
                    'large' => '18',
                    'xlarge' => '21'
                ],
            ],
            [
                'name' => 'Pugliese',
                'description' => 'Tomato sauce, mozzarella, oregano, and onions',
                'image_path' => '/images/pizzas/pizza3.jpg',
                'price' => [
                    'small' => '11',
                    'medium' => '13',
                    'large' => '16',
                    'xlarge' => '21'
                ],
            ],
            [
                'name' => 'Montanara',
                'description' => 'Tomato sauce, mozzarella, mushrooms, pepperoni, and Stracchino (soft cheese)',
                'image_path' => '/images/pizzas/pizza7.jpg',
                'price' => [
                    'small' => '12',
                    'medium' => '13',
                    'large' => '14',
                    'xlarge' => '15'
                ],
            ],
            [
                'name' => 'Emiliana',
                'description' => 'Tomato sauce, mozzarella, eggplant, boiled potatoes, and sausage',
                'image_path' => '/images/pizzas/pizza4.jpg',
                'price' => [
                    'small' => '11',
                    'medium' => '14',
                    'large' => '17',
                    'xlarge' => '21'
                ],
            ],
            [
                'name' => 'Romana',
                'description' => 'Tomato sauce, mozzarella, anchovies, capers, and oregano',
                'image_path' => '/images/pizzas/pizza2.jpg',
                'price' => [
                    'small' => '10',
                    'medium' => '12',
                    'large' => '14',
                    'xlarge' => '16'
                ],
            ],
            [
                'name' => 'Fattoria',
                'description' => 'Tomato sauce, mozzarella, peppers, peas, porchetta (Italian spit-roasted pork)',
                'image_path' => '/images/pizzas/pizza6.jpg',
                'price' => [
                    'small' => '11',
                    'medium' => '15',
                    'large' => '19',
                    'xlarge' => '21'
                ],
            ],
            [
                'name' => 'Schiacciata',
                'description' => 'Olive oil and rosemary',
                'image_path' => '/images/pizzas/pizza2.jpg',
                'price' => [
                    'small' => '13',
                    'medium' => '15',
                    'large' => '17',
                    'xlarge' => '19'
                ],
            ],
            [
                'name' => 'Prosciutto',
                'description' => 'Tomato sauce, mozzarella, ham, and oregano',
                'image_path' => '/images/pizzas/pizza1.jpg',
                'price' => [
                    'small' => '13',
                    'medium' => '15',
                    'large' => '17',
                    'xlarge' => '19'
                ],
            ],
            [
                'name' => 'Americana',
                'description' => 'Tomato sauce, mozzarella, sausage and french fries',
                'image_path' => '/images/pizzas/pizza8.jpg',
                'price' => [
                    'small' => '13',
                    'medium' => '15',
                    'large' => '17',
                    'xlarge' => '19'
                ],
            ],
        ];
        foreach ($pizzas as $pizza){
            $this->insertPizza($pizza);
        }
    }

    public function insertPizza($data)
    {
        $pizza = new \App\Pizza();
        $pizza->name = $data['name'];
        $pizza->description = $data['description'];
        $pizza->image_path = $data['image_path'];
        $pizza->price = json_encode($data['price']);
        $pizza->save();
    }
}

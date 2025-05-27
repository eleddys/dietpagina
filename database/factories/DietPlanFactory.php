<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DietPlanFactory extends Factory
{
    protected static $counter = 0;
    
    protected $dietNames = [
        'Dieta Keto',
        'Plan Mediterráneo',
        'Dieta Paleo',
        'Ayuno Intermitente',
        'Dieta Vegetariana',
        'Dieta Vegana',
        'Dieta Catogenica',
        'Dieta de Paleo',
        'Dieta Flexiteriana',
        "Dieta DASH",
        'Dietea Astringente',
        'Dieta Detox',
        'Dieta Alcalina',
        'Dieta Paleo',
        'Dieta Blanda'
    ];

 public function definition()
{
    self::$counter++;

    $imagenes = [
        "https://images.pexels.com/photos/30208902/pexels-photo-30208902/free-photo-of-fresh-tomato-salad-with-basil-and-feta-cheese.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/6066041/pexels-photo-6066041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80",
        "https://images.unsplash.com/photo-1432139555190-58524dae6a55?auto=format&fit=crop&w=400&q=80",
        "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=400&q=80",
        "https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=400&q=80",
        "https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&w=400",
        "https://images.pexels.com/photos/5938/food-salad-healthy-lunch.jpg?auto=compress&w=400",
        "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=400&q=80",
        "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=400&q=80",
        "https://images.unsplash.com/photo-1482049016688-2d3e1b311543?auto=format&fit=crop&w=400&q=80",
        "https://images.pexels.com/photos/7601395/pexels-photo-7601395.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/3038242/pexels-photo-3038242.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/32193925/pexels-photo-32193925/free-photo-of-fresh-green-apple-and-walnut-salad-bowl.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/32191184/pexels-photo-32191184/free-photo-of-delicious-tuna-salad-with-fresh-vegetables.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/11906476/pexels-photo-11906476.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/3872370/pexels-photo-3872370.jpeg",
        "https://images.pexels.com/photos/842571/pexels-photo-842571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1211887/pexels-photo-1211887.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/361184/asparagus-steak-veal-steak-veal-361184.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1059905/pexels-photo-1059905.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/257816/pexels-photo-257816.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/6896522/pexels-photo-6896522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1213710/pexels-photo-1213710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1860204/pexels-photo-1860204.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/2280620/pexels-photo-2280620.jpeg",
        "https://images.pexels.com/photos/7129455/pexels-photo-7129455.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/2102948/pexels-photo-2102948.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/6740535/pexels-photo-6740535.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/5182119/pexels-photo-5182119.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/2284166/pexels-photo-2284166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/5966437/pexels-photo-5966437.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/2097090/pexels-photo-2097090.jpeg",
        "https://images.pexels.com/photos/2894651/pexels-photo-2894651.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/10281067/pexels-photo-10281067.jpeg",
        "https://images.pexels.com/photos/3758144/pexels-photo-3758144.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/8367082/pexels-photo-8367082.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/28679898/pexels-photo-28679898/free-photo-of-gourmet-fresh-fig-and-burrata-salad-in-provence.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/6065915/pexels-photo-6065915.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/144239/tomatoes-tomato-mozzarella-basil-mozzarella-144239.jpeg",
        "https://images.pexels.com/photos/4491279/pexels-photo-4491279.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/628777/pexels-photo-628777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1143754/pexels-photo-1143754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1833336/pexels-photo-1833336.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1832016/pexels-photo-1832016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1639555/pexels-photo-1639555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/248509/pexels-photo-248509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/3985872/pexels-photo-3985872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    ];

    $imagenSeleccionada = $imagenes[(self::$counter - 1) % count($imagenes)];

    return [
        'name' => $this->dietNames[array_rand($this->dietNames)].' '.self::$counter,
        'description' => $this->generateDietDescription(),
        'duration_days' => rand(7, 30),
        'daily_calories' => rand(1200, 2500),
        'price' => rand(30, 200) + (rand(0, 99)/100),
        'difficulty' => ['Principiante', 'Intermedia', 'Avanzada'][rand(0, 2)],
        'meal_type' => $this->dietNames[array_rand($this->dietNames)],
        'image_url' => $imagenSeleccionada
    ];
}


    protected function generateDietDescription()
    {
        $benefits = [
            'Pérdida de peso',
            'Mejora digestiva',
            'Más energía',
            'Control glucémico'
        ];
        
        return "Beneficio principal: ".$benefits[array_rand($benefits)].". ".
               "Incluye ".rand(3,6)." comidas diarias.";
    }
}
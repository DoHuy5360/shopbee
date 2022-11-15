<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cart::class;
    public function definition()
    {
        return [
            'code' => $this -> fake() -> text,
            'user_code' => $this -> fake() -> text,
            'product_code' => $this -> fake() -> text,
        ];
    }
}
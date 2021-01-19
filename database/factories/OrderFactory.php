<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\ShippingMethod;
use App\Models\Tax;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        $shipping_method = ShippingMethod::inRandomOrder()->first();
        $tax = $this->faker->randomFloat(2, 20, 100);
        $sub_total = $this->faker->randomFloat(2, 100, 300);

        return [
            'shipping_method_id' => $shipping_method->id,
            'coupon_id' => Coupon::inRandomOrder()->first()->id,
            'payment_method' => $this->faker->creditCardType,
            'shipping_charge' => $shipping_method->charge,
            'tax' => $tax,
            'sub_total' => $sub_total,
            'grand_total' => $shipping_method->charge + $tax + $sub_total,
            'payment_status' => $this->faker->randomElement(array_keys(Order::PAYMENT_STATUS)),
            'order_status' => $this->faker->randomElement(array_keys(Order::ORDER_STATUS)),
        ];
    }
}

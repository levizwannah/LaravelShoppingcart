<?php

namespace LeviZwannah\Tests\Shoppingcart\Fixtures;

use LeviZwannah\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class BuyableProductTrait extends Model implements Buyable
{
    use \LeviZwannah\Shoppingcart\CanBeBought;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'price',
        'weight',
    ];

    protected $attributes = [
        'id'     => 1,
        'name'   => 'Item name',
        'price'  => 10.00,
        'weight' => 0,
    ];
}

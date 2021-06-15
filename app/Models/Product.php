<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_manufacturer',
        'header',
        'stock_availability',
        'price_site',
        'price_purchase',
        'discount_rate',
        'ISBN',
        'RRP',
        'solded',
        'year',
        'tags',
        'comx_img_1',
        'comx_img_2',
        'comx_img_3',
        'comx_img_4',
        'comx_img_5',
        'comx_description'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}

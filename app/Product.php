<?php

namespace App;

use Eloquent;

/**
 * @property int $id
 * @property int $availableQuantity
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property array $wishes
 * @property mixed $category
 */
class Product extends Eloquent
{
    protected $table = 'product';
    public $timestamps = true;
    protected $availableQuantity;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishes()
    {
        return $this->hasMany(Wish::class, 'product_id');
    }
}

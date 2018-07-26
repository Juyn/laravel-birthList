<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $categories
 * @property int $id
 * @property int $availableQuantity
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model
{
    protected $table = 'product';
    public $timestamps = true;
    protected $availableQuantity;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}

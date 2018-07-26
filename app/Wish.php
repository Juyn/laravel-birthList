<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property mixed $user_id
 * @property mixed $product_id
 */
class Wish extends Model
{
    protected $table = 'wish';
    public $timestamps = true;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_id()
    {
        return $this->belongsTo("App\Product");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_id()
    {
        return $this->belongsTo('App\User');
    }
}

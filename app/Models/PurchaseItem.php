<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchaseItem
 * 
 * @property int $id
 * @property int $purchase_id
 * @property int $item_id
 * @property float $quantity
 * @property float $price
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Item $item
 * @property Purchase $purchase
 *
 * @package App\Models
 */
class PurchaseItem extends Model
{
	protected $table = 'purchase_items';

	protected $casts = [
		'purchase_id' => 'int',
		'item_id' => 'int',
		'quantity' => 'float',
		'price' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'purchase_id',
		'item_id',
		'quantity',
		'price',
		'total'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function purchase()
	{
		return $this->belongsTo(Purchase::class);
	}
}

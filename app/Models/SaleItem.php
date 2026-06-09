<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SaleItem
 * 
 * @property int $id
 * @property int $sale_id
 * @property int $item_id
 * @property int|null $batch_id
 * @property float $quantity
 * @property float $price
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Batch|null $batch
 * @property Item $item
 * @property Sale $sale
 *
 * @package App\Models
 */
class SaleItem extends Model
{
	protected $table = 'sale_items';

	protected $casts = [
		'sale_id' => 'int',
		'item_id' => 'int',
		'batch_id' => 'int',
		'quantity' => 'float',
		'price' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'sale_id',
		'item_id',
		'batch_id',
		'quantity',
		'price',
		'total'
	];

	public function batch()
	{
		return $this->belongsTo(Batch::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function sale()
	{
		return $this->belongsTo(Sale::class);
	}
}

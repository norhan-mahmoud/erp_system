<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StockMovement
 * 
 * @property int $id
 * @property int $item_id
 * @property int $warehouse_id
 * @property string $type
 * @property float $quantity
 * @property float|null $unit_cost
 * @property string|null $reference_type
 * @property int|null $reference_id
 * @property bool $is_opening
 * @property Carbon $date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Item $item
 * @property Warehouse $warehouse
 *
 * @package App\Models
 */
class StockMovement extends Model
{
	protected $table = 'stock_movements';

	protected $casts = [
		'item_id' => 'int',
		'warehouse_id' => 'int',
		'quantity' => 'float',
		'unit_cost' => 'float',
		'reference_id' => 'int',
		'is_opening' => 'bool',
		'date' => 'datetime'
	];

	protected $fillable = [
		'item_id',
		'warehouse_id',
		'type',
		'quantity',
		'unit_cost',
		'reference_type',
		'reference_id',
		'is_opening',
		'date'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function warehouse()
	{
		return $this->belongsTo(Warehouse::class);
	}
}

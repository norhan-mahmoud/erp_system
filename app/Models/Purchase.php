<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 * 
 * @property int $id
 * @property int $supplier_id
 * @property Carbon $date
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $supplier
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Purchase extends Model
{
	protected $table = 'purchases';

	protected $casts = [
		'supplier_id' => 'int',
		'date' => 'datetime',
		'total' => 'float'
	];

	protected $fillable = [
		'supplier_id',
		'date',
		'total'
	];

	public function supplier()
	{
		return $this->belongsTo(Supplier::class);
	}

	public function items()
	{
		return $this->belongsToMany(Item::class, 'purchase_items')
					->withPivot('id', 'quantity', 'price', 'total')
					->withTimestamps();
	}
}

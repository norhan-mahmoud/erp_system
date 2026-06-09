<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property int $customer_id
 * @property Carbon $date
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Customer $customer
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sales';

	protected $casts = [
		'customer_id' => 'int',
		'date' => 'datetime',
		'total' => 'float'
	];

	protected $fillable = [
		'customer_id',
		'date',
		'total'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function items()
	{
		return $this->belongsToMany(Item::class, 'sale_items')
					->withPivot('id', 'batch_id', 'quantity', 'price', 'total')
					->withTimestamps();
	}
}

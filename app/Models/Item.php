<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $unit
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|BatchTreatment[] $batch_treatments
 * @property Collection|FeedConsumption[] $feed_consumptions
 * @property Collection|Purchase[] $purchases
 * @property Collection|Sale[] $sales
 * @property Collection|StockMovement[] $stock_movements
 *
 * @package App\Models
 */
class Item extends Model
{
	protected $table = 'items';

	protected $fillable = [
		'name',
		'type',
		'unit'
	];

	public function batch_treatments()
	{
		return $this->hasMany(BatchTreatment::class);
	}

	public function feed_consumptions()
	{
		return $this->hasMany(FeedConsumption::class);
	}

	public function purchases()
	{
		return $this->belongsToMany(Purchase::class, 'purchase_items')
					->withPivot('id', 'quantity', 'price', 'total')
					->withTimestamps();
	}

	public function sales()
	{
		return $this->belongsToMany(Sale::class, 'sale_items')
					->withPivot('id', 'batch_id', 'quantity', 'price', 'total')
					->withTimestamps();
	}

	public function stock_movements()
	{
		return $this->hasMany(StockMovement::class);
	}
}

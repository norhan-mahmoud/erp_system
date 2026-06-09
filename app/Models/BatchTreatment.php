<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BatchTreatment
 * 
 * @property int $id
 * @property int $batch_id
 * @property int $item_id
 * @property float $quantity
 * @property float $cost
 * @property Carbon $date
 * @property string $reference_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Batch $batch
 * @property Item $item
 *
 * @package App\Models
 */
class BatchTreatment extends Model
{
	protected $table = 'batch_treatments';

	protected $casts = [
		'batch_id' => 'int',
		'item_id' => 'int',
		'quantity' => 'float',
		'cost' => 'float',
		'date' => 'datetime'
	];

	protected $fillable = [
		'batch_id',
		'item_id',
		'quantity',
		'cost',
		'date',
		'reference_type'
	];

	public function batch()
	{
		return $this->belongsTo(Batch::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}

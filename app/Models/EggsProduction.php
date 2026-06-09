<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EggsProduction
 * 
 * @property int $id
 * @property int $batch_id
 * @property Carbon $date
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Batch $batch
 *
 * @package App\Models
 */
class EggsProduction extends Model
{
	protected $table = 'eggs_production';

	protected $casts = [
		'batch_id' => 'int',
		'date' => 'datetime',
		'quantity' => 'int'
	];

	protected $fillable = [
		'batch_id',
		'date',
		'quantity'
	];

	public function batch()
	{
		return $this->belongsTo(Batch::class);
	}
}

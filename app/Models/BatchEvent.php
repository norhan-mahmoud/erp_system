<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BatchEvent
 * 
 * @property int $id
 * @property int $batch_id
 * @property string $type
 * @property int $quantity
 * @property string|null $reference_type
 * @property int|null $reference_id
 * @property Carbon $date
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Batch $batch
 *
 * @package App\Models
 */
class BatchEvent extends Model
{
	protected $table = 'batch_events';

	protected $casts = [
		'batch_id' => 'int',
		'quantity' => 'int',
		'reference_id' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'batch_id',
		'type',
		'quantity',
		'reference_type',
		'reference_id',
		'date',
		'notes'
	];

	public function batch()
	{
		return $this->belongsTo(Batch::class);
	}
}

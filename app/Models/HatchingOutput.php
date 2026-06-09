<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HatchingOutput
 * 
 * @property int $id
 * @property int $hatching_cycle_id
 * @property int $batch_id
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Batch $batch
 * @property HatchingCycle $hatching_cycle
 *
 * @package App\Models
 */
class HatchingOutput extends Model
{
	protected $table = 'hatching_outputs';

	protected $casts = [
		'hatching_cycle_id' => 'int',
		'batch_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'hatching_cycle_id',
		'batch_id',
		'quantity'
	];

	public function batch()
	{
		return $this->belongsTo(Batch::class);
	}

	public function hatching_cycle()
	{
		return $this->belongsTo(HatchingCycle::class);
	}
}

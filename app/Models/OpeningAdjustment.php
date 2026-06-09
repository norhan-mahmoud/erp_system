<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OpeningAdjustment
 * 
 * @property int $id
 * @property string $entity_type
 * @property int $entity_id
 * @property float|null $quantity
 * @property float|null $value
 * @property Carbon $date
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class OpeningAdjustment extends Model
{
	protected $table = 'opening_adjustments';

	protected $casts = [
		'entity_id' => 'int',
		'quantity' => 'float',
		'value' => 'float',
		'date' => 'datetime'
	];

	protected $fillable = [
		'entity_type',
		'entity_id',
		'quantity',
		'value',
		'date',
		'notes'
	];
}

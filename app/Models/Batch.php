<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Batch
 * 
 * @property int $id
 * @property string|null $code
 * @property string $source_type
 * @property bool $is_opening
 * @property Carbon|null $start_date
 * @property Carbon|null $opening_date
 * @property int $initial_quantity
 * @property int $current_quantity
 * @property float|null $opening_cost
 * @property string $status
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|BatchEvent[] $batch_events
 * @property Collection|BatchTreatment[] $batch_treatments
 * @property Collection|EggsProduction[] $eggs_productions
 * @property Collection|FeedConsumption[] $feed_consumptions
 * @property Collection|HatchingOutput[] $hatching_outputs
 * @property Collection|SaleItem[] $sale_items
 *
 * @package App\Models
 */
class Batch extends Model
{
	protected $table = 'batches';

	protected $casts = [
		'is_opening' => 'bool',
		'start_date' => 'datetime',
		'opening_date' => 'datetime',
		'initial_quantity' => 'int',
		'current_quantity' => 'int',
		'opening_cost' => 'float'
	];

	protected $fillable = [
		'code',
		'source_type',
		'is_opening',
		'start_date',
		'opening_date',
		'initial_quantity',
		'current_quantity',
		'opening_cost',
		'status',
		'notes'
	];

	public function batch_events()
	{
		return $this->hasMany(BatchEvent::class);
	}

	public function batch_treatments()
	{
		return $this->hasMany(BatchTreatment::class);
	}

	public function eggs_productions()
	{
		return $this->hasMany(EggsProduction::class);
	}

	public function feed_consumptions()
	{
		return $this->hasMany(FeedConsumption::class);
	}

	public function hatching_outputs()
	{
		return $this->hasMany(HatchingOutput::class);
	}

	public function sale_items()
	{
		return $this->hasMany(SaleItem::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HatchingCycle
 * 
 * @property int $id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * @property int|null $eggs_input
 * @property int|null $eggs_hatched
 * @property float|null $hatch_rate
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|HatchingOutput[] $hatching_outputs
 *
 * @package App\Models
 */
class HatchingCycle extends Model
{
	protected $table = 'hatching_cycles';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'eggs_input' => 'int',
		'eggs_hatched' => 'int',
		'hatch_rate' => 'float'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'eggs_input',
		'eggs_hatched',
		'hatch_rate',
		'notes'
	];

	public function hatching_outputs()
	{
		return $this->hasMany(HatchingOutput::class);
	}
}

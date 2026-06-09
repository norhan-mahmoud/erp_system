<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense
 * 
 * @property int $id
 * @property string $type
 * @property float $amount
 * @property Carbon $date
 * @property string $source_type
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Expense extends Model
{
	protected $table = 'expenses';

	protected $casts = [
		'amount' => 'float',
		'date' => 'datetime'
	];

	protected $fillable = [
		'type',
		'amount',
		'date',
		'source_type',
		'notes'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalExpense
 * 
 * @property int $id
 * @property int $category_id
 * @property float $amount
 * @property Carbon $date
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property PersonalCategory $personal_category
 *
 * @package App\Models
 */
class PersonalExpense extends Model
{
	protected $table = 'personal_expenses';

	protected $casts = [
		'category_id' => 'int',
		'amount' => 'float',
		'date' => 'datetime'
	];

	protected $fillable = [
		'category_id',
		'amount',
		'date',
		'notes'
	];

	public function personal_category()
	{
		return $this->belongsTo(PersonalCategory::class, 'category_id');
	}
}

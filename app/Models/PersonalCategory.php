<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalCategory
 * 
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property PersonalCategory|null $personal_category
 * @property Collection|PersonalCategory[] $personal_categories
 * @property Collection|PersonalExpense[] $personal_expenses
 *
 * @package App\Models
 */
class PersonalCategory extends Model
{
	protected $table = 'personal_categories';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'parent_id',
		'type'
	];

	public function personal_category()
	{
		return $this->belongsTo(PersonalCategory::class, 'parent_id');
	}

	public function personal_categories()
	{
		return $this->hasMany(PersonalCategory::class, 'parent_id');
	}

	public function personal_expenses()
	{
		return $this->hasMany(PersonalExpense::class, 'category_id');
	}
}

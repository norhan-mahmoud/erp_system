<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * 
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property float $opening_balance
 * @property string $balance_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Purchase[] $purchases
 *
 * @package App\Models
 */
class Supplier extends Model
{
	protected $table = 'suppliers';

	protected $casts = [
		'opening_balance' => 'float'
	];

	protected $fillable = [
		'name',
		'phone',
		'opening_balance',
		'balance_type'
	];

	public function purchases()
	{
		return $this->hasMany(Purchase::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Warehouse
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|StockMovement[] $stock_movements
 *
 * @package App\Models
 */
class Warehouse extends Model
{
	protected $table = 'warehouses';

	protected $fillable = [
		'name'
	];

	public function stock_movements()
	{
		return $this->hasMany(StockMovement::class);
	}
}

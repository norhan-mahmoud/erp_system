<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asset
 * 
 * @property int $id
 * @property string $name
 * @property float $purchase_value
 * @property float $salvage_value
 * @property int $useful_life_months
 * @property Carbon $purchase_date
 * @property Carbon $start_date
 * @property float $accumulated_depreciation
 * @property bool $is_opening
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AssetDepreciation[] $asset_depreciations
 *
 * @package App\Models
 */
class Asset extends Model
{
	protected $table = 'assets';

	protected $casts = [
		'purchase_value' => 'float',
		'salvage_value' => 'float',
		'useful_life_months' => 'int',
		'purchase_date' => 'datetime',
		'start_date' => 'datetime',
		'accumulated_depreciation' => 'float',
		'is_opening' => 'bool'
	];

	protected $fillable = [
		'name',
		'purchase_value',
		'salvage_value',
		'useful_life_months',
		'purchase_date',
		'start_date',
		'accumulated_depreciation',
		'is_opening'
	];

	public function asset_depreciations()
	{
		return $this->hasMany(AssetDepreciation::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AssetDepreciation
 * 
 * @property int $id
 * @property int $asset_id
 * @property string $month
 * @property float $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Asset $asset
 *
 * @package App\Models
 */
class AssetDepreciation extends Model
{
	protected $table = 'asset_depreciations';

	protected $casts = [
		'asset_id' => 'int',
		'value' => 'float'
	];

	protected $fillable = [
		'asset_id',
		'month',
		'value'
	];

	public function asset()
	{
		return $this->belongsTo(Asset::class);
	}
}

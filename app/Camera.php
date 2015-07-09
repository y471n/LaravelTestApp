<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Camera extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to' => 'slug'
	];

    protected $fillable = [
		'name',
		'description',
		'launched_on'
	]; 

	protected $dates = ['launched_on'];

	public function scopeLaunched($query) 
	{
		$query->where('launched_on', '<=', Carbon::now());
	}

	public function scopeUnlaunched($query) 
	{
		$query->where('launched_on', '>=', Carbon::now());
	}

	public function setLaunchedOnAttribute($date)
	{
		$this->attributes['launched_on'] = Carbon::createFromFormat('Y-m-d', $date);
	}

    /*
     * Get the tags associated with the given camera
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /*
     *  Get a list of tag ids associated with the camera
     */
    public function getTagListAttributes()
    {
        return $this->tags->lists('id');
    }

    public function getLaunchedOnAttribute($date)
    {
        return new Carbon($date);
    }

}

<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    /**
     * Get the Family that belong to this Commodity
     */
    public function family()
    {
        return $this->hasOne('\App\Family', 'id', 'family_id');
    }

    /**
     * Get the Classification that belong to this Commodity
     */
    public function classification()
    {
        return $this->hasOne('\App\Classification', 'id', 'class_id');
    }

    /**
     * Get the Segment that belong to this Commodity
     */
    public function segment()
    {
        return $this->hasOne('\App\Segment', 'id', 'segment_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'class_id',
        'family_id',
        'segment_id'
    ];
}

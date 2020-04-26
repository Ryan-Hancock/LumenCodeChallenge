<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classification';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}

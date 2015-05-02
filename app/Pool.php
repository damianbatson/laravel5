<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Pool extends Model {

	protected $table = 'pools';
    protected $fillable = ['title']; 
 
    public function poolOptions()
    {
        return $this->hasMany('App\PoolOptions');
    }
    
}
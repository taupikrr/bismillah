<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumah extends Model
{
	protected $table ='rumahs';
    protected $fillable = ['ket','agen_id', 'foto'];
    protected $visible = ['ket','agen_id', 'foto'];
    public $timestamps = true;

    public function agens()
    {
    	return $this->belongsTo('App\agen');
    }
}

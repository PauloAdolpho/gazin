<?php declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{

    protected $table = "developers";
    protected $fillable = ['nome', 'sexo', 'hobby', 'datanascimento', 'idade'];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    
}

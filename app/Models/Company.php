<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Psy\CodeCleaner\AssignThisVariablePass;

class Company extends Model
{
    use HasFactory;

    public $timestamps = false;
    //protected $table = 'companies';

    protected $fillable = [
        'name',
        'field',
        'employe',
        'location'
    ];

    protected $guarded = ['id'];

    public function jobs() {
        return $this->hasMany(PostJob::class, 'company_id', 'id');
    }

}

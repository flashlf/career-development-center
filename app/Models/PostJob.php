<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    use HasFactory;

     # Default tablename would be like this
    // protected $table = 'post_jobs';

    # Defining Custom table name
    // protected $table = 'custom_name';

    # Defining Custom name for primary Key
    // protected $primaryKey = 'post_job_id';

    # Eloquent model expects every table to have created_at
    # and updated_at timestamp columns, by default it set to true
    public $timestamps = false;

    # Formating timestamps Eloquent by custom
    protected $dateFormat = 'YYYY-MM-DD hh24:mi:ss';

    public function company() {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}

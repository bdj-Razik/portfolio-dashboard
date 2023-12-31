<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeQualification extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'type_qualifications';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];

    public function qualifications()
    {
        return $this->hasMany(Qualification::class, 'type_qualification_id');
    }

}

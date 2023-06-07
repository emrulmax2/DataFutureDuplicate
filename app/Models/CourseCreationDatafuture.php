<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCreationDatafuture extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_creation_id',
        'field_name',
        'field_type',
        'field_value',
        'field_desc',
        'parent_id',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function creation(){
        return $this->belongsTo(CourseCreation::class, 'course_creation_id');
    }
}

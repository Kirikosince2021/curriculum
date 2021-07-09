<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'posts';

    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required|between:0,225'
    );
}

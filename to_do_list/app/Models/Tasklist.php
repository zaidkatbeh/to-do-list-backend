<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tasklist extends Model
{
    protected $table='tasklists';
    protected $primaryKey='listID';
    use SoftDeletes;
    use HasFactory;
}

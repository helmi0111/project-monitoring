<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring extends Model
{
    use HasFactory;
    protected $fillable = ['projectName, client, projectLeaderName, projectLeaderEmail, projectLeaderPhoto, startDate, endDate, progress,'];
    protected $table = 'monitoring';
    public $timestamps = false;
}

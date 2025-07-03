<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RfidCard extends Model
{
    protected $fillable = ['uid','name','status','phone'];
}

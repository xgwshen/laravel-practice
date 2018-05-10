<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'student';
    public $timestamps = true ;

    public function getDateFormat()
    {
        return time();
    }
    public function asDateTime($value)
    {
        return $value;
    }
}
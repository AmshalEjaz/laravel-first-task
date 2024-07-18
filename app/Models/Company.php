<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\User;
class Company extends Model
{
    use HasFactory;
    protected $fillable=['name','email','logo','website'];
    public function employee()
    {
        return $this->hasMany(User::class);
    }
     public function user()
    {
        return $this->hasMany(User::class);
    }
}

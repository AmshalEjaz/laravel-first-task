<?php

namespace App\Models;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Employee extends Model 
{
    use HasFactory;
    use Notifiable;
    use AuthenticableTrait;
    protected $guard = 'employee';
    protected $fillable=['name','email','phone','company_id','password'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
        protected $hidden = [
        'password', 'remember_token',
    ];

   
}

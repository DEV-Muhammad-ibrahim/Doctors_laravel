<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'first_name',
        'last_name',
        'phone_number',
        'gender',
        'date_of_birth',
        'biography',
        'clinic_name',
        'clinic_address',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'postal_code',
        'pricing',
        'services',
        'specialization',
        'degree',
        'college',
        'year_of_completion',
        'hospital_name',
        'from',
        'to',
        'designation',
        'user_id',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}

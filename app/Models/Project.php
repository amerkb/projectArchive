<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bio', 'cost', 'project_owner', 'payment_method',
        'executive_owner', 'parentage_project_owner', 'parentage_executive_owner', 'total_amount'];

    public function updates()
    {
        return $this->hasMany(Update::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

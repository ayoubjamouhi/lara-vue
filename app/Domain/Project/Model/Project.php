<?php

namespace App\Domain\Project\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function users(): BelongsToMany
    {
         return $this->belongsToMany(User::class)->withTimestamps();
    }
}

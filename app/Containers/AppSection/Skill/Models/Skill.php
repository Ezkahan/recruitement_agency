<?php

namespace App\Containers\AppSection\Skill\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'skill_type_id',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'name' => 'json',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Skill';

    public function skillType()
    {
        return $this->belongsTo(SkillType::class);
    }

    public function getNameAttribute()
    {
        return $this->getTranslations('name');
    }

    public function scopeSearch(Builder $builder, string $search): Builder
    {
        return $builder->where('name->ru', 'LIKE', '%' . $search . '%')->orWhere('name->en', 'LIKE', '%' . $search . '%');
    }
}

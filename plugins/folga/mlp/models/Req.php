<?php namespace Folga\Mlp\Models;

use Model;

/**
 * Model
 */
class Req extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'birthday', 'city', 'job', 'contact', 'achievements', 'level', 'title', 'team', 'social', 'project1', 'start1', 'finish1', 'area1', 'geography1', 'quantity1', 'achievements1', 'social1', 'media1', 'vk1', 'project2', 'start2', 'finish2', 'area2', 'geography2', 'quantity2', 'achievements2', 'social2', 'media2', 'vk2', 'project3', 'start3', 'finish3', 'area3', 'geography3', 'quantity3', 'achievements3', 'social3', 'media3', 'vk3'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'folga_mlp_apps';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

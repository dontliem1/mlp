<?php namespace Folga\Mlp\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \Winter\Storm\Database\Traits\Sortable;
    use \Winter\Storm\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $jsonable = ['gallery', 'team'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'folga_mlp_projects';

    public $implement = [
        'Winter.Storm.Database.Behaviors.Sortable'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

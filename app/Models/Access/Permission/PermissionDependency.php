<?php

namespace App\Models\Access\Permission;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Permission\Traits\Relationship\PermissionDependencyRelationship;
use Illuminate\Database\Query\Builder;

/**
 * Class PermissionDependency
 *
 * @package App\Models\Access\Permission
 * @property integer $id
 * @property integer $permission_id
 * @property integer $dependency_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Permission $permission
 * @method static Builder|PermissionDependency whereId($value)
 * @method static Builder|PermissionDependency wherePermissionId($value)
 * @method static Builder|PermissionDependency whereDependencyId($value)
 * @method static Builder|PermissionDependency whereCreatedAt($value)
 * @method static Builder|PermissionDependency whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PermissionDependency extends Model
{
    use PermissionDependencyRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.permission_dependencies_table');
    }
}
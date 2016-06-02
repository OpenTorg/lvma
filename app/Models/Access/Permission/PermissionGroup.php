<?php

namespace App\Models\Access\Permission;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Permission\Traits\Attribute\PermissionGroupAttribute;
use App\Models\Access\Permission\Traits\Relationship\PermissionGroupRelationship;
use Illuminate\Database\Query\Builder;

/**
 * Class PermissionGroup
 *
 * @package App\Models\Access\Permission
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property integer $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Collection|PermissionGroup[] $children
 * @property-read Collection|Permission[] $permissions
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @method static Builder|PermissionGroup whereId($value)
 * @method static Builder|PermissionGroup whereParentId($value)
 * @method static Builder|PermissionGroup whereName($value)
 * @method static Builder|PermissionGroup whereSort($value)
 * @method static Builder|PermissionGroup whereCreatedAt($value)
 * @method static Builder|PermissionGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PermissionGroup extends Model
{
    use PermissionGroupRelationship, PermissionGroupAttribute;

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
        $this->table = config('access.permission_group_table');
    }
}
<?php

namespace App\Models\Access\Permission;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Permission\Traits\Attribute\PermissionGroupAttribute;
use App\Models\Access\Permission\Traits\Relationship\PermissionGroupRelationship;

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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\PermissionGroup[] $children
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\Permission[] $permissions
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereSort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\PermissionGroup whereUpdatedAt($value)
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
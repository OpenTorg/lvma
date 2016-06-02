<?php

namespace App\Models\Access\Permission;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Permission\Traits\Attribute\PermissionAttribute;
use App\Models\Access\Permission\Traits\Relationship\PermissionRelationship;

/**
 * Class Permission
 *
 * @package App\Models\Access\Permission
 * @property integer $id
 * @property integer $group_id
 * @property string $name
 * @property string $display_name
 * @property boolean $system
 * @property integer $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 * @property-read \App\Models\Access\Permission\PermissionGroup $group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\PermissionDependency[] $dependencies
 * @property-read mixed $system_label
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereSystem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereSort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\Permission\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends Model
{
    use PermissionRelationship, PermissionAttribute;

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

    protected $with = ['dependencies.permission'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.permissions_table');
    }
}
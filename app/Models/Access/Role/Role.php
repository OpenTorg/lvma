<?php

namespace App\Models\Access\Role;

use App\Models\Access\Permission\Permission;
use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Role\Traits\RoleAccess;
use App\Models\Access\Role\Traits\Attribute\RoleAttribute;
use App\Models\Access\Role\Traits\Relationship\RoleRelationship;
use Illuminate\Database\Query\Builder;

/**
 * Class Role
 *
 * @package App\Models\Access\Role
 * @property integer $id
 * @property string $name
 * @property boolean $all
 * @property integer $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $edit_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @property-read Collection|User[] $users
 * @property-read Collection|Permission[] $permissions
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereAll($value)
 * @method static Builder|Role whereSort($value)
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use RoleAccess, RoleAttribute, RoleRelationship;

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
        $this->table = config('access.roles_table');
    }
}

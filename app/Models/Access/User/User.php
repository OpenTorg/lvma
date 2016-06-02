<?php

namespace App\Models\Access\User;

use App\Models\Access\Permission\Permission;
use App\Models\Access\Role\Role;
use App\Models\Access\User\Traits\UserAccess;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Access\User\Traits\Attribute\UserAttribute;
use App\Models\Access\User\Traits\Relationship\UserRelationship;

/**
 * Class User
 *
 * @package App\Models\Access\User
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property boolean $status
 * @property string $confirmation_code
 * @property boolean $confirmed
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read mixed $confirmed_label
 * @property-read mixed $picture
 * @property-read mixed $edit_button
 * @property-read mixed $change_password_button
 * @property-read mixed $status_button
 * @property-read mixed $confirmed_button
 * @property-read mixed $delete_button
 * @property-read mixed $action_buttons
 * @property-read Collection|Role[] $roles
 * @property-read Collection|Permission[] $permissions
 * @property-read Collection|SocialLogin[] $providers
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereStatus($value)
 * @method static Builder|User whereConfirmationCode($value)
 * @method static Builder|User whereConfirmed($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereDeletedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{

    use SoftDeletes, UserAccess, UserAttribute, UserRelationship;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}

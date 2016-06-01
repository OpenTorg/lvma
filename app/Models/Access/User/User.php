<?php

namespace App\Models\Access\User;

use App\Models\Access\User\Traits\UserAccess;
use Illuminate\Database\Eloquent\SoftDeletes;
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Role\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\Permission\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Access\User\SocialLogin[] $providers
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Access\User\User whereDeletedAt($value)
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

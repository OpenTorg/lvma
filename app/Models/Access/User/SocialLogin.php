<?php

namespace App\Models\Access\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class SocialLogin
 *
 * @package App\Models\Access\User
 * @property integer $id
 * @property integer $user_id
 * @property string $provider
 * @property string $provider_id
 * @property string $token
 * @property string $avatar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|SocialLogin whereId($value)
 * @method static Builder|SocialLogin whereUserId($value)
 * @method static Builder|SocialLogin whereProvider($value)
 * @method static Builder|SocialLogin whereProviderId($value)
 * @method static Builder|SocialLogin whereToken($value)
 * @method static Builder|SocialLogin whereAvatar($value)
 * @method static Builder|SocialLogin whereCreatedAt($value)
 * @method static Builder|SocialLogin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SocialLogin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'social_logins';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
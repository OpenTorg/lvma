<?php

namespace App\Http\Controllers\Api\Access;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Access\Role\RoleRepositoryContract;
use App\Http\Requests\Backend\Access\Permission\EditPermissionRequest;
use App\Http\Requests\Backend\Access\Permission\CreatePermissionRequest;
use App\Http\Requests\Backend\Access\Permission\DeletePermissionRequest;
use App\Http\Requests\Backend\Access\Permission\StorePermissionRequest;
use App\Http\Requests\Backend\Access\Permission\UpdatePermissionRequest;
use App\Repositories\Backend\Access\Permission\PermissionRepositoryContract;
use App\Repositories\Backend\Access\Permission\Group\PermissionGroupRepositoryContract;

/**
 * Class PermissionController
 * @package App\Http\Controllers\Access
 */
class GroupsPermissionsController extends Controller
{
    /**
     * @var RoleRepositoryContract
     */
    protected $roles;

    /**
     * @var PermissionRepositoryContract
     */
    protected $permissions;

    /**
     * @var PermissionGroupRepositoryContract
     */
    protected $groups;

    /**
     * @param RoleRepositoryContract $roles
     * @param PermissionRepositoryContract $permissions
     * @param PermissionGroupRepositoryContract $groups
     */
    public function __construct(
        RoleRepositoryContract $roles,
        PermissionRepositoryContract $permissions,
        PermissionGroupRepositoryContract $groups
    ) {
        $this->roles = $roles;
        $this->permissions = $permissions;
        $this->groups = $groups;
    }

    /**
     * @param $groupId int
     * @return mixed
     */
    public function index($groupId)
    {
        return $this->permissions->getPermissionsByGroup($groupId);
    }
}

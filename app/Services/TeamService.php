<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Services\UserService;
use App\Repositories\User\User;
use App\Repositories\Team\TeamRepository;

/**
 * Class TeamService
 * @package App\Services
 */
class TeamService
{
    /**
     * TeamService constructor.
     * @param TeamRepository $teamRepository
     * @param \App\Services\UserService $userService
     */
    public function __construct(
        TeamRepository $teamRepository,
        UserService $userService
    ) {
        $this->repo = $teamRepository;
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->repo->all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function paginated()
    {
        return $this->repo->paginated(env('paginate', 25));
    }

    /**
     * @param $input
     * @return \App\Repositories\Team\Team
     */
    public function search($input)
    {
        return $this->repo->search($input, env('paginate', 25));
    }

    /**
     * @param $input
     * @return \App\Repositories\Team\Team
     * @throws \Exception
     */
    public function create($input)
    {
            $team = $this->repo->create($input);
            return $team;
    }

    /**
     * @param $id
     * @return \App\Repositories\Team\Team|\Illuminate\Support\Collection|null|static
     */
    public function find($id)
    {
        return $this->repo->find($id);
    }

    /**
     * @param $name
     * @return \App\Repositories\Team\Team|\Illuminate\Support\Collection|null|static
     */
    public function findByName($name)
    {
        return $this->repo->findByName($name);
    }

    /**
     * @param $id
     * @param $input
     * @return \App\Repositories\Team\Team
     */
    public function update($id, $input)
    {
        return $this->repo->update($id, $input);
    }

    /**
     * @param $id
     * @return \App\Repositories\Team\Team|bool|\Illuminate\Support\Collection|null|static
     */
    public function destroy($id)
    {
        $team = $this->repo->find($id);
        foreach ($team->members as $member) {
            $this->userService->leaveTeam($id, $member->id);
        }

        return $this->repo->destroy($id);

    }

    /**
     * @param $id
     * @param $email
     * @return bool
     * @throws \Exception
     */
    public function invite($id, $email)
    {

        $user = $this->userService->findByEmail($email);

        if ($user->isTeamMember($id)) {
            throw new \Exception("User arleady team member", 1);
        }

        $this->userService->joinTeam($id, $user->id);
    }

    /**
     * @param $id
     * @param $userId
     * @return bool
     * @throws \Exception
     */
    public function remove($id, $userId)
    {

        $user = $this->userService->find($userId);
        $this->userService->leaveTeam($id, $user->id);

        return true;
    }
}

<?php

namespace App\Policies;

use App\Models\Discipline;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DisciplinePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->is_teacher();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_teacher();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Discipline  $discipline
     * @return mixed
     */
    public function update(User $user, Discipline $discipline)
    {
        return $user->is_teacher();
    }
}

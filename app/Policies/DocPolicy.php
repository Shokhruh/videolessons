<?php

namespace App\Policies;

use App\Models\Doc;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DocPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Doc $doc): bool
    {
        return $user->id === $doc->user_id || \auth()->user()->role->position === 'developer' || \auth()->user()->role->position === 'manager';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return \auth()->user()->role->position === 'teacher' || \auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Doc $doc): bool
    {
        return $user->id === $doc->user_id || \auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Doc $doc): bool
    {
        return $user->id === $doc->user_id || \auth()->user()->role->position === 'developer';
    }
}

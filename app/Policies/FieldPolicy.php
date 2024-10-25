<?php

namespace App\Policies;

use App\Models\Field;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FieldPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Field $field): bool
    {
        return auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Field $field): bool
    {
        return auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Field $field): bool
    {
        return auth()->user()->role->position === 'developer';
    }
}

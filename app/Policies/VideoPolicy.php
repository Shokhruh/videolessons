<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Video;
use Illuminate\Auth\Access\Response;

class VideoPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Video $video): bool
    {
        return $user->id === $video->user_id || \auth()->user()->role->position === 'developer' || \auth()->user()->role->position === 'manager';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return auth()->user()->role->position === 'teacher' || auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Video $video): bool
    {
        return $user->id == $video->user_id || auth()->user()->role->position === 'developer';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Video $video): bool
    {
        return $user->id == $video->user_id || auth()->user()->role->position === 'developer';
    }
}

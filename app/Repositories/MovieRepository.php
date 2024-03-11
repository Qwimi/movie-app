<?php

namespace App\Repositories;

use App\Models\User;

class MovieRepository
{
    /**
     * Display a listing of the resource.
     *
     * @param User $user
     * @return Collection
     */

    public function forUser(User $user)
    {
        return $user->movies()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}

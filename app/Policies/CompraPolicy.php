<?php

namespace App\Policies;

use App\Models\Compra;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompraPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Compras') || $user->hasRole('Auditor');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Compra $compra): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Compras') || $user->hasRole('Auditor');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Compras');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Compra $compra): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Compras');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Compra $compra): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Compra $compra): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Compra $compra): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }
}

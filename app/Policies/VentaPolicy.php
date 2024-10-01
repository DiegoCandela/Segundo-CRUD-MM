<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Venta;
use Illuminate\Auth\Access\Response;

class VentaPolicy
{
    /** 
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Ventas') || $user->hasRole('hola');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Venta $venta): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Ventas') || $user->hasRole('Auditor');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Ventas');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Venta $venta): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin') || $user->hasRole('Ventas');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Venta $venta): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Venta $venta): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Venta $venta): bool
    {
        return $user->hasRole('SuperAdmin') || $user->hasRole('Admin');
    }
}

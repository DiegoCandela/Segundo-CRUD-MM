<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\cliente;
use App\Models\compra;
use App\Models\producto;
use App\Models\proveedor;
use App\Models\User;
use App\Models\venta;
use App\Policies\ClientePolicy;
use App\Policies\CompraPolicy;
use App\Policies\ProductoPolicy;
use App\Policies\ProveedorPolicy;
use App\Policies\UserPolicy;
use App\Policies\VentaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        cliente::class => ClientePolicy::class,
        producto::class => ProductoPolicy::class,
        compra::class => CompraPolicy::class,
        proveedor::class => ProveedorPolicy::class,
        venta::class => VentaPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}

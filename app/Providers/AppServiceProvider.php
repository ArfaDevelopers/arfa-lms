<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    public const SUPER = '/super-dashboard'; // Example URL for super-admin
    public const ADMIN = '/admin-dashboard'; // Example URL for admin
    public const INSTRUCTOR = '/instructor-dashboard'; // Example URL for instructor
    public const STUDENT = '/student-dashboard'; // Define the student dashboard URL
    public const HOME = '/home'; // Default home URL
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

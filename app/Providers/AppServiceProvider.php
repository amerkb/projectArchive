<?php

namespace App\Providers;

use App\Interfaces\NoteInterface;
use App\Interfaces\PaymentInterface;
use App\Interfaces\ProjectInterface;
use App\Interfaces\UserInterface;
use App\Repository\NoteRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProjectRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        JsonResource::withoutWrapping();

        $this->app->bind(ProjectInterface::class, function () {
            return new ProjectRepository();
        });
        $this->app->bind(PaymentInterface::class, function () {
            return new PaymentRepository();
        });
        $this->app->bind(UserInterface::class, function () {
            return new UserRepository();
        });
        $this->app->bind(NoteInterface::class, function () {
            return new NoteRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

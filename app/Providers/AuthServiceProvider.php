<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Course;
use App\Models\Doc;
use App\Models\Field;
use App\Models\Role;
use App\Models\User;
use App\Models\Video;
use App\Policies\CoursePolicy;
use App\Policies\DocPolicy;
use App\Policies\FieldPolicy;
use App\Policies\RolePolicy;
use App\Policies\VideoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Course::class => CoursePolicy::class,
        Video::class => VideoPolicy::class,
        Doc::class => DocPolicy::class,
        Field::class => FieldPolicy::class,
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}

<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $about = About::first();
        $contact = Contact::first();
        $projects = Project::all();
        $service_categories = ServiceCategory::all();
        $blogs = Blog::take(3)->get();

        View::composer(['inc.header','inc.footer'], function ($view) use ($about, $contact,$projects, $service_categories,$blogs) {
            $view->with(compact('about', 'contact','projects', 'service_categories','blogs'));
        });

        $categories = Category::with('products')->get();

        View::composer(['inc.header'], function ($view) use ($categories) {
            $view->with(compact('categories'));
        });
    }
}

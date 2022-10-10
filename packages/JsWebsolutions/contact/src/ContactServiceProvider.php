<?php 
namespace JsWebsolutions\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    
     /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contact');

    }

    
    public function register()
    {
        //load routes file.
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

}

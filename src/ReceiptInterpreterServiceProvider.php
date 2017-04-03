<?php
/*
 * This file is part of ReceiptInterpreter.
 *
 * (c) Oliver Kaufmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\ReceiptInterpreter;

use Illuminate\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

/**
 * This is the YourPackage service provider class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptInterpreterServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/receiptinterpreter.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('receiptinterpreter.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('receiptinterpreter');
        }
        $this->mergeConfigFrom($source, 'receiptinterpreter');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerReceipt();
    }

    /**
     * Register the auth factory class.
     *
     * @return void
     */
    protected function registerReceipt()
    {
        $this->app->singleton('receiptinterpreter.receipt', function (Container $app) {
            return new Receipt($app['config']);
        });
        $this->app->alias('receiptinterpreter.receipt', Receipt::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return ['receiptinterpreter.receipt'];
    }
}

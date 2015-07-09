<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 07/07/15
 * Time: 4:56 PM
 */

namespace app\Providers;


use Illuminate\Support\ServiceProvider;
use Repositories\Camera\CameraRepositoryInterface;
use Repositories\Camera\DbCameraRepository;

class BackendServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Repositories\Camera\CameraRepositoryInterface', 'Repositories\Camera\DbCameraRepository');
    }
}
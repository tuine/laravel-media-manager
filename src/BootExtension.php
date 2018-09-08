<?php

namespace Tuine\Admin\Media;

use Encore\Admin\Admin;

trait BootExtension
{
    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        static::registerRoutes();

        Admin::extend('super-media-manager', __CLASS__);
    }

    /**
     * Register routes for laravel-admin.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(
            function ($router) {
                /* @var \Illuminate\Routing\Router $router */
                $router->get('resources', 'Tuine\Admin\Media\MediaController@index')
                    ->name('resources-index');
                $router->get('resources/download', 'Tuine\Admin\Media\MediaController@download')
                    ->name('resources-download');
                $router->delete('resources/delete', 'Tuine\Admin\Media\MediaController@delete')
                    ->name('resources-delete');
                $router->put('resources/move', 'Tuine\Admin\Media\MediaController@move')
                    ->name('resources-move');
                $router->post('resources/upload', 'Tuine\Admin\Media\MediaController@upload')
                    ->name('resources-upload');
                $router->post('resources/folder', 'Tuine\Admin\Media\MediaController@newFolder')
                    ->name('resources-new-folder');
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        parent::createMenu('Super Media manager', 'resources', 'fa-file');

        parent::createPermission('Super Media manager', 'ext.super-media-manager', 'resources*');
    }
}

<?php

namespace App\Mixins;

use Illuminate\Support\Facades\Route;

class RouteMixin
{
    public function customResources()
    {
        return function(array $resources) {
            return static::group([], function () use ($resources){
                foreach ($resources as $name => $controller) {
                    static::group([ 'prefix'=> $name, 'as' => $name.'.' ], function () use ($controller){
                        static::get('', [$controller, 'index'])->name('index');
                        static::get('show/{id}', [$controller, 'show'])->name('show');
                        static::get('/create', [$controller, 'create'])->name('create');
                        static::post('/store', [$controller, 'store'])->name('store');
                        static::get('/edit/{id}', [$controller, 'edit'])->name('edit');
                        static::post('update/{id}', [$controller, 'update'])->name('update');
                        static::get('delete/{id}', [$controller, 'delete'])->name('delete');
                        static::post('destroy/{id}', [$controller, 'destroy'])->name('destroy');
                    });
                }
            });
        };
    }

    public function customResource()
    {
        return function(string $name, $controller) {
            return static::group([ 'prefix'=> $name, 'as' => $name.'.' ], function () use ($controller){
                static::get('', [$controller, 'index'])->name('index');
                static::get('show/{id}', [$controller, 'show'])->name('show');
                static::get('/create', [$controller, 'create'])->name('create');
                static::post('/store', [$controller, 'store'])->name('store');
                static::get('/edit/{id}', [$controller, 'edit'])->name('edit');
                static::post('edit/{id}', [$controller, 'update'])->name('update');
                static::get('destroy/{id}', [$controller, 'delete'])->name('destroy');
                static::post('destroy/{id}', [$controller, 'destroy'])->name('destroy');
            });
        };
    }
}

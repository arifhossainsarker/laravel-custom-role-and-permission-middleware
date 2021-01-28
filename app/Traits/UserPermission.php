<?php

namespace App\Traits;

trait UserPermission{
    public function checkRequestPermission(){
        if(
            empty(auth()->user()->role->permission['permission']['user']['list']) && \Route::is('user.index') ||
            empty(auth()->user()->role->permission['permission']['user']['add']) && \Route::is('user.create') ||
            empty(auth()->user()->role->permission['permission']['user']['edit']) && \Route::is('user.edit')
        ){
            return response()->view('welcome');
        }elseif(
            empty(auth()->user()->role->permission['permission']['role']['list']) && \Route::is('role.index') ||
            empty(auth()->user()->role->permission['permission']['role']['add']) && \Route::is('role.create') ||
            empty(auth()->user()->role->permission['permission']['role']['edit']) && \Route::is('role.edit')
        ){
            return response()->view('welcome');
        }elseif (
            empty(auth()->user()->role->permission['permission']['permissions']['list']) && \Route::is('permission.index') ||
            empty(auth()->user()->role->permission['permission']['permissions']['add']) && \Route::is('permission.create') ||
            empty(auth()->user()->role->permission['permission']['permissions']['edit']) && \Route::is('permission.edit')
        ) {
            return response()->view('welcome');
        }
    }
}
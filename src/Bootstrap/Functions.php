<?php

/**
 * Use this file for functions that you would like to use throughout the application
 *
 * It is autoloaded by composer
 */

// return the config value from yaml files inside src/Config folder
if (!function_exists('config')) {
    function config(string $key)
    {
        return (new SimplyDi\Skeleton\Config\Config(CONFIG_PATH))->getConfig($key);
    }
}

// usage: base_url('about') returns https://example.com/about if app url is set else /about is returned
if (!function_exists('base_url')) {
    function base_url(string $url = ''): string
    {
        $appUrl = config('app.url');

        if ($appUrl === null) {
            $appUrl = '/';
        }

        return rtrim($appUrl, '/') . '/' . ltrim($url, '/');
    }
}
[![Packagist Version](https://img.shields.io/packagist/v/elbojoloco/laravel-clean-stubs)](https://packagist.org/packages/elbojoloco/laravel-clean-stubs)
[![Packagist Downloads](https://img.shields.io/packagist/dt/elbojoloco/laravel-clean-stubs)](https://packagist.org/packages/elbojoloco/laravel-clean-stubs/stats)

# Laravel Clean Stubs

This package brings all of Laravel's stubs but without docblocks. That's it. Stubs are template files that are used by the framework's "make" command, e.g. `php artisan make:model`. This package is inspired by [zepfietje/laravel-stubs](https://github.com/zepfietje/laravel-stubs), the difference is that this package only removes docblocks.

## Installation

1. Install this package.
   ```console
   $ composer require elbojoloco/laravel-clean-stubs
   ```
2. Add this hook to "scripts" in your `composer.json` to receive the latest stubs when this packages gets updated.
   ```
   "post-update-cmd": [
       "@php artisan stub:publish --force"
   ]
   ```
3. Publish the stubs.
   ```console
   $ php artisan stub:publish
   ```

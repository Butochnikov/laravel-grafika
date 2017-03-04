# Laravel Grafika

## Installation

Require it in your Laravel project:

    composer require butochnikov/laravel-grafika

or update `composer.json` file:
   
   ```json
   {
       "require": {
           "laravel/framework": "5.4.*",
           "butochnikov/laravel-grafika": "~0.0.1"
       }
   }
   ```

and run `composer update` from terminal.

Update `app.php` file in `app/config` directory:

```php
'providers' => [
    ...
    Butochnikov\Grafika\GrafikaServiceProvider::class
    ...
],
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
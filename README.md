# Breezometer-laravel

[![Latest Version](https://img.shields.io/github/release/addappio/breezometer-laravel.svg?style=flat-square)](https://github.com/addappio/breezometer-laravel/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/addappio/breezometer-laravel/master.svg?style=flat-square)](https://travis-ci.org/addappio/breezometer-laravel)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/addappio/breezometer-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/addappio/breezometer-laravel/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/addappio/breezometer-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/addappio/breezometer-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/addappio/breezometer-laravel.svg?style=flat-square)](https://packagist.org/packages/addappio/breezometer-laravel)

Laravel implementation of the [Breezometer-php client](https://github.com/addappio/breezometer-php). This contains a service provider and a facade.

 Laravel  | Testbench
:---------|:----------
 4.2.x    | dev-laravel-4
 5.0.x    | 1.0.*@dev

## Install

Via Composer

``` bash
$ composer require nwidart/breezometer-laravel
```

Add the service provider to `config/app.php`

``` php
'Addapp\BreezometerLaravel\BreezometerServiceProvider'
```

Optional: Publish the configuration file

``` bash
$ php artisan vendor:publish --provider="Addapp\BreezometerLaravel\BreezometerServiceProvider"
```
## Usage


Inject the `Breezometer` class into your methods/constructors. Or use the `Breezometer` Facade.

For information on the usage of the Breezometer class, please refer to the [original repository](https://github.com/addappio/Breezometer-php).


## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nicolas Widart](https://github.com/nWidart)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

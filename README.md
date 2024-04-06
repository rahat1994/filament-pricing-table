# A simple pricing table plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rahatbaksh/filament-pricing-table.svg?style=flat-square)](https://packagist.org/packages/rahatbaksh/filament-pricing-table)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rahatbaksh/filament-pricing-table/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rahatbaksh/filament-pricing-table/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rahatbaksh/filament-pricing-table/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rahatbaksh/filament-pricing-table/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rahatbaksh/filament-pricing-table.svg?style=flat-square)](https://packagist.org/packages/rahatbaksh/filament-pricing-table)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rahatbaksh/filament-pricing-table
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-pricing-table-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-pricing-table-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-pricing-table-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentPricingTable = new RahatBaksh\FilamentPricingTable();
echo $filamentPricingTable->echoPhrase('Hello, RahatBaksh!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rahat Baksh](https://github.com/rahat1994)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

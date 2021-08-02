# LimeGo API Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/grafstorm/limego-api-php.svg?style=flat-square)](https://packagist.org/packages/grafstorm/limego-api-php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/grafstorm/limego-api-php/run-tests?label=tests)](https://github.com/grafstorm/limego-api-php/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/grafstorm/limego-api-php/Check%20&%20fix%20styling?label=code%20style)](https://github.com/grafstorm/limego-api-php/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/grafstorm/limego-api-php.svg?style=flat-square)](https://packagist.org/packages/grafstorm/limego-api-php)

---
This package can be used as to scaffold a framework agnostic package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this limego-api-php
2. Run "./configure.sh" to run a script that will replace all placeholders throughout all the files
3. Have fun creating your package.
4. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/limego-api-php.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/limego-api-php)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require grafstorm/limego-api-php
```

## Usage

```php
$limego-api-php = new Grafstorm\LimeGoApi();
echo $limego-api-php->echoPhrase('Hello, Grafstorm!');
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

- [grafi](https://github.com/argia-andreas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

# pattern

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Sam Snelling``` ```snellingio``` ```https://snelling.io``` ```sam@onroi.com``` ```snelling``` ```pattern``` ```A pattern parsing library``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require snelling/pattern
```

## Usage

``` php
$skeleton = new Snelling\Pattern();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sam@onroi.com instead of using the issue tracker.

## Credits

- [Sam Snelling][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/snelling/pattern.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/snelling/pattern/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/snelling/pattern.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/snelling/pattern.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/snelling/pattern.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/snelling/pattern
[link-travis]: https://travis-ci.org/snelling/pattern
[link-scrutinizer]: https://scrutinizer-ci.com/g/snelling/pattern/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/snelling/pattern
[link-downloads]: https://packagist.org/packages/snelling/pattern
[link-author]: https://github.com/snellingio
[link-contributors]: ../../contributors

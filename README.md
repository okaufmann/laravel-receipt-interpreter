Receipt interpreter
=================

ReceiptInterpreter was created by, and is maintained by [Oliver Kaufmann](https://github.com/). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/ptondereau/laravel-packme/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of ReceiptInterpreter, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require okaufmann/laravel-receipt-interpreter
```

## Configuration

ReceiptInterpreter provides a configuration example.

So you can test publishing assets with:

```bash
$ php artisan vendor:publish --provider="Okaufmann\ReceiptInterpreter\{{ package }}ServiceProvider"
```

This will create a `config/receiptinterpreter` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

Usage

##### Further Information

There are other classes in this package that are not documented here. This is because they are not intended for public use and are used internally by this package.

## License

ReceiptInterpreter is licensed under [The MIT License (MIT)](LICENSE).
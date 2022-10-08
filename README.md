# 📜 Papyrus Identity generator: Ramsey UUID implementation
[![Build Status](https://scrutinizer-ci.com/g/papyrusphp/ramsey-uuid-identity-generator/badges/build.png?b=main)](https://github.com/papyrusphp/ramsey-uuid-identity-generator/actions)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/papyrusphp/ramsey-uuid-identity-generator.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/ramsey-uuid-identity-generator/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/papyrusphp/ramsey-uuid-identity-generator.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/ramsey-uuid-identity-generator)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/papyrus/ramsey-uuid-identity-generator.svg?style=flat&include_prereleases)](https://packagist.org/packages/papyrus/ramsey-uuid-identity-generator)
[![PHP Version](https://img.shields.io/badge/php-%5E8.1-8892BF.svg?style=flat)](http://www.php.net)

Implementation of [papyrus/identity-generator](https://github.com/papyrusphp/identity-generator), based on [ramsey/uuid](https://github.com/ramsey/uuid).

### Installation
Install via composer:
```bash
$ composer install papyrus/ramsey-uuid-identity-generator
```

## Configuration
Bind this implementation to the interface `IdentityGenerator` in your service definitions, e.g.:

A plain PHP PSR-11 Container definition:

```php
use Papyrus\IdentityGenerator\IdentityGenerator;
use Papyrus\RamseyUuidIdentityGenerator\RamseyUuidIdentityGenerator;
use Psr\Container\ContainerInterface;

return [
    // Other definitions
    // ...

    IdentityGenerator::class => static fn (ContainerInterface $container): IdentityGenerator => new RamseyUuidIdentityGenerator(),
];
```
A Symfony YAML-file definition:
```yaml
services:
  Papyrus\IdentityGenerator\IdentityGenerator:
        class: Papyrus\RamseyUuidIdentityGenerator\RamseyUuidIdentityGenerator
```

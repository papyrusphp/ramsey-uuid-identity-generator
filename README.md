# 📜 Papyrus Identity generator: Ramsey UUID implementation
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

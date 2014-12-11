#zf2doctrine
===========

Minimal doctrine2 and zf2

### Installation

You need composer cf: https://getcomposer.org/download/:

```sh
php -r "readfile('https://getcomposer.org/installer');" | php
```

Install dependencies (use composer.json)

```sh
php composer.phar update
```

> It could take some time to get ZendFramework and so on

### Using zftool

Create a module named catalog:
```sh
./vendor/zendframework/zftool/zf.php create module Catalog
```
Then create an Index controller:
```sh
./vendor/zendframework/zftool/zf.php create controller Index Catalog
```

### Doctrine entities from YAML
```sh
php public/index.php orm:generate-entities module/Catalog/src/Catalog/Entity/
```

### Doctrine database schema update from entities
```sh
php public/index.php  orm:schema-tool:update --force
```

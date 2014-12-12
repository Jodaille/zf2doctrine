#zf2doctrine
===========

Minimal doctrine2 and zf2 module.

## Installation

You need composer cf: https://getcomposer.org/download/:

```sh
php -r "readfile('https://getcomposer.org/installer');" | php
```

Install dependencies (use composer.json)

```sh
php composer.phar update
```

> It could take some time to get ZendFramework and so on

### Database configuration
rename or duplicate the file 
**doctrine.local.php.dist.dist** to **doctrine.local.php**

in **config/[autoload]** directory 

Then edit values for database access: dbname, user, password ...

Update database schema:
```sh
php public/index.php  orm:schema-tool:update --force
```

Database will be updated form [Entities].

### Manage database with YAML schema definition

You will find some samples in [Mapping] directory.

File naming is important, for example: 

* [Catalog.Entity.Catalog.dcm.yml]

**Catalog** is namespace, followed by **Entity**, followed by Table (Entity) name , then **.dcm.yml**

### Doctrine entities from YAML

One yml are done you can generate entities (if mapping is good :P ):

```sh
php public/index.php orm:generate-entities module/Catalog/src/Catalog/Entity/
```

## Using zftool

How we have created module named catalog:
```sh
./vendor/zendframework/zftool/zf.php create module Catalog
```
Then create an Index controller:
```sh
./vendor/zendframework/zftool/zf.php create controller Index Catalog
```

[autoload]:https://github.com/Jodaille/zf2doctrine/tree/master/config/autoload
[Entities]:https://github.com/Jodaille/zf2doctrine/tree/master/module/Catalog/src/Catalog/Entity
[Mapping]:https://github.com/Jodaille/zf2doctrine/tree/master/module/Catalog/src/Catalog/Mapping
[Catalog.Entity.Catalog.dcm.yml]:https://github.com/Jodaille/zf2doctrine/blob/master/module/Catalog/src/Catalog/Entity/Catalog.php

# Seeders

## Create seeder

```bash
$ php artisan make:seeder NameSeeder
# output:
#   migration in database/seeders/
```

## Examples

```bash
$ php artisan make:seeder ModuleSeeder
```

[Result](../database/seeders/ModuleSeeder.php)


## Run seed

```bash
$ php artisan db:seed --class=ModuleSeeder
```

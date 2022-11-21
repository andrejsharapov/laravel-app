# Models

## Create model with migration

```bash
$ php artisan make:model NameModel -m
# output:
#   model     in app/Models/
#   migration in database/migrations/
$ php artisan migrate
```

## Examples

```bash
$ php artisan make:model Module -m
```

[Result](../app/Models/Module.php)

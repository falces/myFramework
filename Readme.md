# Log de acciones

Genera composer.json y autoloads

```
$ composer init
```

Instalar dependencias para entorno de desarrollo:
```
$ composer require --dev phpunit/phpunit
$ composer require --dev behat/behat
```
Instalar gestión dump-env:
```
$ composer require symfony/flex --ignore-platform-reqs
$ composer require symfony/dotenv --ignore-platform-reqs
$ composer dump-env local
```
Regenerar autoloads (error class not found):
```
$ composer dump-autoload
```
Añadir clases en autoload:
```
# composer.json
"autoload": {
    "classmap": [
        "PATH TO YOUR MIGRATIONS FOLDER"
    ],
}
```
Añadir librería propia:

1. Añadir el origen en composer.json:

    ```
    "repositories":[
            {
                "type": "vcs",
                "url": "git@github.com:falces/EnvLoader.git"
            }
        ]
    ```

2. 
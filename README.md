Media manager for laravel-admin
===============================

## Adaptation from
- [laravel-admin-extensions/media-manager](https://github.com/laravel-admin-extensions/media-manager) 


Media manager for `local` or `oss` disk.


## Installation

```
$ composer require tuine/laravel-media-manager -vvv

$ php artisan admin:import super-media-manager
```

Add a disk config in `config/admin.php`:

```php

    'extensions' => [

        'super-media-manager' => [
        
            // Select a disk that you configured in `config/filesystem.php`
            'disk' => 'alioss'
        ],
    ],

```

## Use aliyun-oss
- [tuine/laravel-aliyun-oss](https://github.com/tuine/laravel-aliyun-oss/) 

License
------------
Licensed under [The MIT License (MIT)](LICENSE).

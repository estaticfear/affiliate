# Laravel 5.6 with crudbooster and laravel module


### CRUDBOOSTER - Laravel CRUD Generator

https://github.com/crocodic-studio/crudbooster

### Laravel Module - Module Management In Laravel

https://github.com/nWidart/laravel-modules


1.Setting the database configuration, open .env file at project root directory
```$xslt
DB_DATABASE=**your_db_name**
DB_USERNAME=**your_db_user**
DB_PASSWORD=**password**
```

2.Create laravel key
```php
$ php artisan key:generate

```

3.Run the following command at the terminal
```php
$ php artisan crudbooster:install
```

4.Run the following command at the terminal
```
composer dump-autoload
```

5.Run seeder
```php
$ php artisan db:seed

```

### Backend URL
/admin/login
```$xslt
default email : admin@crudbooster.com
default password : 123456
```


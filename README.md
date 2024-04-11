## Laravel v11 | Elasticsearch
Use
[Scout](https://laravel.com/docs/11.x/scout), [Elastic-Client](https://github.com/babenkoivan/elastic-client) and [Elastic-Scout-Driver](https://github.com/babenkoivan/elastic-scout-driver) 

## Setup
```
composer install
php artisan migrate
php artisan db:seed
php artisan scout:import "App\Models\Product"
```

## Result
![](./public/1.png)
![](./public/2.png)

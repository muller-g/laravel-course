# Install xamp and composer

## Run this command to install example application
```
composer create-project laravel/laravel example-app
```

# Run application
```
php artisan serve
```

# To create a new Controller/Model
```
php artisan make:controller Name
```

# Create function index to refer /
```
public function index(){
        
}
```

# Import controller 
```
use App\Http\Controllers\TestController;
Route::get('/', [TestController::class, 'index']);
```

# Database connection
- Go to .env change the database config and run
```
php artisan migrate
```

# Create migration and ran active
```
php artisan make:migration create_table_name
php artisan migrate
```

# See migrations
```
php artisan migrate:status
```

# Delete and create again all tables (delete values from tables)
```
php artisan migrate:fresh
```

# Create column in table
```
php artisan make:migration_add_category_to_products_table
```

# Rollback and refresh
```
php artisan migrate:rollback
php artisan migrate:refresh
```

# Create model (connection between db and app)
```
php artisan make:model Event
```

# Table name must be as plural and controller as singular
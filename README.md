# Laravel Project with Filament Admin Panel - File Structure

This document outlines the key file structure of a Laravel project using Filament for admin panel development.

## Root Directory

*   **`app/`**: Contains the core logic of your application.
    *   **`Filament/`**: (Created by Filament)
        *   **`Resources/`**: Filament resources (e.g., `ProductResource.php`, `UserResource.php`). Defines CRUD interfaces for models.
        *   **`Widgets/`**: Custom dashboard widgets.
        *   **`Pages/`**: Custom pages for the Filament admin panel.
        *   **`Forms/`**: Reusable forms for resources.
        *   **`Tables/`**: Reusable tables for resources.
        *   **`Actions/`**: Custom actions for forms and tables.
    *   **`Models/`**: Eloquent models (e.g., `Product.php`, `User.php`).
    *   **`Http/`**: Controllers, middleware, and requests (less direct interaction with Filament).
    *   **`Providers/`**: Service providers for application bootstrapping.
    *   **`Console/`**: Custom Artisan commands.
    *   `Exceptions/`: Custom exception handling.
    *   `Mail/`: Mailables.
    *   `Notifications/`: Notification classes.
    *   `Policies/`: Authorization policies.
    *   `Rules/`: Custom validation rules.
*   **`bootstrap/`**: Laravel bootstrapping scripts.
*   **`config/`**: Application configuration files (database, mail, cache, etc.).
*   **`database/`**: Database-related files.
    *   **`migrations/`**: Database migration files.
*   **`public/`**: Web root (contains `index.php`, assets).
*   **`resources/`**: Views, language files, and assets.
    *   **`views/`**: Blade templates (less direct use with Filament).
    *   **`lang/`**: Language files for localization.
    *   **`css/`**: CSS files.
    *   **`js/`**: JavaScript files.
*   **`routes/`**: Route definitions.
    *   `web.php`: Web routes.
    *   `console.php`: Console routes (Artisan commands).
    *   `api.php`: API routes.
*   **`storage/`**: Application-generated files (logs, cache, sessions).
*   **`tests/`**: Application tests.
*   **`vendor/`**: Composer dependencies.
*   **`composer.json`**: Project dependencies.
*   **`composer.lock`**: Exact versions of installed dependencies.
*   **`.env`**: Environment variables.
*   **`package.json`**: Front-end dependencies (if any).

## Key Files and Directories for Filament Development

*   **`app/Filament/Resources/`**: Primary location for Filament resource definitions.
*   **`app/Models/`**: Eloquent models defining data structure.
*   **`database/migrations/`**: Database migrations for creating and modifying tables.

## Example: `ProductResource.php`

```php
namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag'; // Example Icon

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255),
                // ... other form fields
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                // ... other table columns
            ]);
    }

    // ... other methods (getRelations, getPages, etc.)
}
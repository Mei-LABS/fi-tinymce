# Filament TinyMCE

## Integration

Filament TinyMCE integrates with:

- TinyMCE 6
- [Laravel Filemanager](https://github.com/UniSharp/laravel-filemanager)

## Installation

To install the package via Composer, run the following command:

```bash
composer require mei-labs/fi-tinymce
```

After installation, publish the assets:

```bash
php artisan vendor:publish --tag="mei-labs-tinymce-assets"
```

Next, publish the Laravel Filemanager’s configuration and assets:

```bash
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

Create a symbolic link for storage:

```bash
php artisan storage:link
```

Optionally, you can publish the configuration file for customization:

```bash
php artisan vendor:publish --tag="mei-labs-tinymce-config"
```

## Usage

To use Filament TinyMCE, you can employ the following syntax in your code:

```php
use MeiLABS\TinyMCE\Forms\Components\TinymceField;

TinymceField::make('description');
```

## Customization

### Simple Editor

To utilize a predefined simple editor, you may use the <code>profile()</code> method as follows:

```php
TinymceField::make('description')->profile('simple');
```

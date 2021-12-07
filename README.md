# Laravel CDZ Jetstream Localization
This package extends the [Jetstream](https://jetstream.laravel.com/) implementation and provides a minimal and simple starting point for building a multilang Laravel application with authentication. The package publishes ressources and views to your application that can be easily customized based on your own application's needs.

## Requirements
[Laravel](https://laravel.com/docs/8.x) >= 8.0

## Installation
First, you should create a new Laravel application, then install the package.
    
    composer require cdz/jetstream-localization
    
After Composer has installed the package, you may run the **cdz-jetstream-localization:install** Artisan command. This command publishes the views, routes, and other resources to your application. The package publishes all of its code to your application so that you have full control and visibility over its features and implementation. After CDZ Localization is installed, you should also compile your assets so that your application's CSS file is available:
    
    php artisan cdz-jetstream-localization:install
    npm install
    npm run dev
    
Then migrate your database:

    php artisan migrate
    
Now your home url and the authentication pages should be accessible in several languages.

## Configuration
The config file is published at **config/localization.php**

## Emails
Emails views files are published at **ressources/views/vendor/mail** (See [Laravel Documentation](https://laravel.com/docs/8.x/mail#customizing-the-components)).

Emails translations are published at **ressources/lang/[LANG]/mails**.

Emails for authentication are defined into **App/Providers/AuthServiceProvider.php**.
    
## Available Stacks
Only Livewire is supported for now and will be automatically installed.

## Available Options
Email Verification for registration is supported and will be automatically installed. Others options (Profile, Teams ...) are not supported for now but can be easily implemented.

    
## Credits
[Codeuz](http://codeuz.com/)

This package is based on [cdz/localization](https://github.com/Codeuz/laravel-localization) package.

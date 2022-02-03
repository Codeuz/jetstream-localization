<?php

namespace cdz\JetstreamLocalization\Console;

//use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
/*use Illuminate\Support\Str;
use Symfony\Component\Process\Process;*/

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cdz-jetstream-localization:install';

    /**
     * The scanned migrations files
     *
     * @var array
     */
    protected $migrations = [];

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Jetstream Localization components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Install Localization
        $this->info('Install cdz/localization ...');
        $this->call('cdz-localization:install');

        // Install Jetstream*/
        $this->info('Install Jetstream ...');
        $this->call('jetstream:install', ['stack' => 'livewire']);

        // Create directories
        $this->info('Install cdz/jetstream-localization ...');
        (new Filesystem)->ensureDirectoryExists(resource_path('views/components/menus'));

        // Config
        copy(__DIR__.'/../../stubs/config/localization.php', base_path('config/localization.php'));
        copy(__DIR__.'/../../stubs/config/fortify.php', base_path('config/fortify.php'));
        copy(__DIR__.'/../../stubs/config/jetstream.php', base_path('config/jetstream.php'));

        // Routes
        copy(__DIR__.'/../../stubs/routes/web.php', base_path('routes/web.php'));

        // Langs
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/lang', resource_path('lang'));
        (new Filesystem)->deleteDirectory(resource_path('lang/de'));
        (new Filesystem)->deleteDirectory(resource_path('lang/it'));

        // Layouts
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/livewire/resources/views/layouts', resource_path('views/layouts'));
        (new Filesystem)->deleteDirectory(resource_path('views/layouts/menus'));
        (new Filesystem)->deleteDirectory(resource_path('views/layouts/navbars'));

        // Components
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/App/View/Components', app_path('View/Components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/livewire/resources/views/components', resource_path('views/components'));
        (new Filesystem)->delete(app_path('View/Components/AppLayout.php'));
        (new Filesystem)->delete(app_path('View/Components/GuestLayout.php'));

        // Views
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/livewire/resources/views/auth', resource_path('views/auth'));
        copy(__DIR__.'/../../stubs/livewire/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
        copy(__DIR__.'/../../stubs/livewire/resources/views/dashboard.blade.php', resource_path('views/dashboard.blade.php'));
        (new Filesystem)->delete(resource_path('views/navigation-menu.blade.php'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/vendor'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/livewire/resources/views/vendor', resource_path('views/vendor'));

        // Actions
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/App/Actions/Fortify', app_path('Actions/Fortify'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/App/Actions/Jetstream', app_path('Actions/Jetstream'));

        // Rules
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/App/Rules', app_path('Rules'));

        // Models
        copy(__DIR__.'/../../stubs/App/Models/User.php', app_path('Models/User.php'));

        // Middlewares
        copy(__DIR__.'/../../stubs/App/Http/Middleware/RedirectIfAuthenticated.php', app_path('Http/Middleware/RedirectIfAuthenticated.php'));
        copy(__DIR__.'/../../stubs/App/Http/Middleware/Authenticate.php', app_path('Http/Middleware/Authenticate.php'));

        // Providers
        copy(__DIR__.'/../../stubs/App/Providers/AuthServiceProvider.php', app_path('Providers/AuthServiceProvider.php'));
        copy(__DIR__.'/../../stubs/App/Providers/RouteServiceProvider.php', app_path('Providers/RouteServiceProvider.php'));

        // Migrations
        if ($this->getMigration('create_users_table')) {
            $this->replaceInFile('$table->string(\'name\');', '$table->string(\'name\');
            $table->string(\'firstname\');', base_path('database/migrations/'.$this->getMigration('create_users_table')));
        }
    }

    /**
     * Get Migration File
     * @param $filename
     * @return string|null
     */
    protected function getMigration($filename) {
        if (isset($this->migrations[$filename])) {
            return $this->migrations[$filename];
        }

        $migrations = array_filter((new Filesystem)->files(base_path('database/migrations')), function($item) use ($filename){
            return str_contains($item->getFilename(), $filename);
        });

        $this->migrations[$filename] = (count($migrations) > 0) ? $migrations[0]->getFilename() : null;

        return $this->migrations[$filename];
    }

    /**
     * Replace a given string within a given file.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $path
     * @return void
     */
    protected function replaceInFile($search, $replace, $path)
    {
        $content = file_get_contents($path);
        if (! str_contains($content, $replace)) {
            file_put_contents($path, str_replace($search, $replace, $content));
        }
    }
}

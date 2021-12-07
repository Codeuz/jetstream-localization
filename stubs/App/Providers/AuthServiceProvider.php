<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->customizeMails();
    }

    /**
     * Customize authentification mails
     *
     * @return void
     */
    protected function customizeMails()
    {
        // Register - Verify Email
        VerifyEmail::toMailUsing(function ($notifiable, $url) {

            $name = $notifiable->full_name;

            return (new MailMessage)
                ->subject(__('mails.auth.register.subject'))
                ->greeting($name ? __('mails.greeting_user', ['name' => $name]) : __('mails.greeting'))
                ->line(__('mails.auth.register.line_1'))
                ->action(__('mails.auth.register.action'), $url);
        });

        // Reset Password
        ResetPassword::toMailUsing(function ($notifiable, $token) {

            // the url isn't available in the callback :(
            $url = url(route(app()->getLocale().'.password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset()
            ], false));

            $name = $notifiable->full_name;

            return (new MailMessage)
                ->subject(__('mails.auth.reset_password.subject'))
                ->greeting($name ? __('mails.greeting_user', ['name' => $name]) : __('mails.greeting'))
                ->line(__('mails.auth.reset_password.line_1'))
                ->action(__('mails.auth.reset_password.action'), $url)
                ->line(__('mails.auth.reset_password.line_2', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                ->line(__('mails.auth.reset_password.line_3'));
        });
    }
}

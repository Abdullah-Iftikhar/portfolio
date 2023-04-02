<?php

namespace App\Providers;

use App\Http\Controllers\Back\SettingController;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            $settings_q = Setting::get();
            $settings=array();
            foreach($settings_q  as $sRow){
                $settings[$sRow->uniqname]=$sRow->value;
            }
            $smtp_server_username= SettingController::simpleEncrypt($settings['smtp_server_username'],'d');
            $smtp_server_password=SettingController::simpleEncrypt($settings['smtp_server_password'],'d');
            $mailgun_secret=SettingController::simpleEncrypt($settings['mailgun_secret'],'d');
            $mandrill_secret=SettingController::simpleEncrypt($settings['mandrill_secret'],'d');
            $ses_key=SettingController::simpleEncrypt($settings['ses_key'],'d');
            $ses_secret=SettingController::simpleEncrypt($settings['ses_secret'],'d');
            $sparkpost_secret=SettingController::simpleEncrypt($settings['sparkpost_secret'],'d');

            config()->set('mail.driver',trim($settings['mail_driver']));
            config()->set('mail.host',trim($settings['smtp_host_address']));
            config()->set('mail.port',trim($settings['smtp_host_port']));
            config()->set('mail.encryption',trim($settings['mail_encryption_protocol']));
            config()->set('mail.username',$smtp_server_username);
            config()->set('mail.password',$smtp_server_password);

            //for mailgun
            config()->set('services.mailgun.domain',trim($settings['mailgun_domain']));
            config()->set('services.mailgun.secret',$mailgun_secret);

            //for mandrill
            config()->set('services.mandrill.secret',$mandrill_secret);

            //for ses
            config()->set('services.ses.key',$ses_key);
            config()->set('services.ses.secret',$ses_secret);

            //for sparkpost
            config()->set('services.sparkpost.secret',$sparkpost_secret);
        }
        catch (\Exception $e) {
        }

        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}

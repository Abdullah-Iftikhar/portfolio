<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uniqueNames = [
            'mail_driver',
            'smtp_host_address',
            'smtp_host_port',
            'mail_encryption_protocol',
            'smtp_server_username',
            'smtp_server_password',
            'mailgun_domain',
            'mailgun_secret',
            'mandrill_secret',
            'ses_key',
            'ses_secret',
            'sparkpost_secret',
        ];

        foreach ($uniqueNames as $name) {
            Setting::updateOrCreate(
                [
                    'uniqname' => $name,
                ],
                [
                    'description' => "This is $name.",
                ]
            );
        }

    }
}

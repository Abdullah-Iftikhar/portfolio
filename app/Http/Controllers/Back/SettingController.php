<?php

namespace App\Http\Controllers\Back;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function setting() {
        return view('panel.admin.settings.profile');
    }

    public function updateAccount(Request $request) {
        $user = auth()->user();
        $request->validate([
            'name' => 'required',
            'phone_no' => 'required|unique:users,phone_no,'.$user->id.',id'
        ]);
        $user->name = $request['name'];
        $user->phone_no = $request['phone_no'];
        $user->save();
        return redirect()->back()->with('success', 'Profile Updated successfully.');
    }

    public function updatePassword(Request $request) {
        $user = auth()->user();
        $request->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->back()->with('success', 'Password Updated successfully.');
    }

    public function mailConfigurationView() {
        $settings = Setting::get();
        $settings_array = array();
        foreach ($settings as $sRow) {
            $settings_array[$sRow->uniqname] = $sRow->value;
        }
        $ret_view_array['settings'] = $settings_array;
        return view('back.settings.mail_server', $ret_view_array);
    }

    public function postSettings(Request $request)  {
        $smtp_server_username = trim($request['smtp_server_username']);
        $t_smtp_server_username = self::simpleEncrypt($smtp_server_username, 'e');

        $smtp_server_password =  trim($request['smtp_server_password']);
        $t_smtp_server_password = self::simpleEncrypt($smtp_server_password, 'e');


        $mailgun_secret = trim($request['mailgun_secret']);
        $t_mailgun_secret = self::simpleEncrypt($mailgun_secret, 'e');

        $mandrill_secret =  trim($request['mandrill_secret']);
        $t_mandrill_secret = self::simpleEncrypt($mandrill_secret, 'e');

        $ses_key = trim($request['ses_key']);
        $t_ses_key =self::simpleEncrypt($ses_key, 'e');

        $ses_secret = trim($request['ses_secret']);
        $t_ses_secret = self::simpleEncrypt($ses_secret, 'e');

        $sparkpost_secret = trim($request['sparkpost_secret']);
        $t_sparkpost_secret = self::simpleEncrypt($sparkpost_secret, 'e');

        DB::table('settings')->where('uniqname', 'mail_driver')->update(['value' => trim($request['mail_driver'])]);
        DB::table('settings')->where('uniqname', 'smtp_host_address')->update(['value' => trim($request['smtp_host_address'])]);
        DB::table('settings')->where('uniqname', 'smtp_host_port')->update(['value' => trim($request['smtp_host_port'])]);
        DB::table('settings')->where('uniqname', 'mail_encryption_protocol')->update(['value' => trim($request['mail_encryption_protocol'])]);
        DB::table('settings')->where('uniqname', 'smtp_server_username')->update(['value' => $t_smtp_server_username]);
        DB::table('settings')->where('uniqname', 'smtp_server_password')->update(['value' => $t_smtp_server_password]);

        DB::table('settings')->where('uniqname', 'mailgun_domain')->update(['value' => trim($request['mailgun_domain'])]);
        DB::table('settings')->where('uniqname', 'mailgun_secret')->update(['value' => $t_mailgun_secret]);

        DB::table('settings')->where('uniqname', 'mandrill_secret')->update(['value' => $t_mandrill_secret]);

        DB::table('settings')->where('uniqname', 'ses_key')->update(['value' => $t_ses_key]);
        DB::table('settings')->where('uniqname', 'ses_secret')->update(['value' => $t_ses_secret]);
        DB::table('settings')->where('uniqname', 'sparkpost_secret')->update(['value' => $t_sparkpost_secret]);

        return redirect()->back()->with('success', 'Record Submitted successfully.');
    }

    public static function simpleEncrypt($string, $action = 'e')
    {
        // you may change these values to your own
        $secret_key = 'NF1ASJ_CRYPTO_SECRETEMX_KEYBYTES';
        $secret_iv = 'NF1ASJ_CRYPTO_SECRETEMX_KEYBYTES_iv';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'e') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else if ($action == 'd') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    public function usersList() {
        $returnArr['users'] = User::whereHas('role', function ($query){
            $query->where('name', 'User');
        })->paginate(15);
        return view('back.admin.users.list', $returnArr);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class MarketeingSms extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    protected $fillable = [
        'user_type', 'tutor_id', 'parent_id', 'status',
        'marketing_id','sms_body','phone','created_at','updated_at'
    ];


    public static function smsApiRequest($numbers, $text)
    {
        try {
            $text = urlencode($text);

            $url = 'https://api.sms.net.bd/sendsms?action=send-sms&api_key=8E980VBykN4qEMK1LLG7QA7g5f5RUnbKz6fEdDQD&to=' . $numbers . '&from=SenderID&msg=' . $text;

            $response = Http::get($url);

            if ($response->successful()) {
                return $response->body();
            } else {

                $errorMessage = 'SMS API request failed. HTTP Error: ' . $response->status();

                return $errorMessage;
            }
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}

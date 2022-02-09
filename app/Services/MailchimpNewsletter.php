<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter
{
    function subscribe(string $email, string $list=null){

        $list ??= config('services.mailchimp.list');
        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
    function client(){
        $mailchimp = new ApiClient();
        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
    }
}

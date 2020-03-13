<?php

/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

require '../vendor/autoload.php';

use SmartJson\Vip\OauthClient;

class OauthClientTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $c = new OauthClient();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->redirectUri = 'http://www.test.com';
//        $result = $c->buildWebAuthorizeUri();
//        $result = $c->buildAppAuthorizeUri();
        $result = $c->getAccessToken('xxxxx');

        var_dump($result);
    }

}

(new OauthClientTest())();
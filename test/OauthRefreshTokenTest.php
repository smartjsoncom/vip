<?php

/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

require '../vendor/autoload.php';

use SmartJson\Vip\Client;
use SmartJson\Vip\Requests\OauthRefreshTokenRequest;
use SmartJson\Vip\Libs\Util;

class OauthRefreshTokenTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new OauthRefreshTokenRequest();
        $req->setRefreshToken('xxxxx');
        $req->setClientId($this->appKey);
        $req->setClientSecret($this->appSecret);
        $req->setRequestClientId(Util::ip());
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new OauthRefreshTokenTest())();
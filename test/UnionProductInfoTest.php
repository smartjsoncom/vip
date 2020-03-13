<?php

/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

require '../vendor/autoload.php';

use SmartJson\Vip\Client;
use SmartJson\Vip\Requests\Union\ProductInfoRequest;

class UnionProductInfoTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new ProductInfoRequest();
        $req->setGoodsIdList(['123123123', '123123123123123123']);
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new UnionProductInfoTest())();
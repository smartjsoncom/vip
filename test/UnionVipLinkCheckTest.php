<?php

/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

require '../vendor/autoload.php';

use SmartJson\Vip\Client;
use SmartJson\Vip\Requests\Union\VipLinkCheckRequest;

class UnionVipLinkCheckTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $content = 'https://m.vip.com/product-3728072-2151761110.html?app_name=wxk_android&client=android';

        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new VipLinkCheckRequest();
        $req->setSource('xxx');
        $req->setContent($content);
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new UnionVipLinkCheckTest())();
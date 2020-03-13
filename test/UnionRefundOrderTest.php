<?php

/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

require '../vendor/autoload.php';

use SmartJson\Vip\Client;
use SmartJson\Vip\Requests\Union\RefundOrderRequest;

class UnionRefundOrderTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new RefundOrderRequest();
        $req->setSearchType(1);
        $req->setSearchTimeStart((time() - 3600) * 1000);
        $req->setSearchTimeEnd(time() * 1000);
        $req->setPage(1);
        $req->setPageSize(2);
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new UnionRefundOrderTest())();
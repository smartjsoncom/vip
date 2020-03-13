<?php
/**
 * Created by PhpStorm.
 * Date: 2020/03/13
 */
require '../vendor/autoload.php';

use SmartJson\Vip\Client;
use SmartJson\Vip\Requests\Union\GenUrlByVIPUrlRequest;

class UnionGenUrlByVIPUrlTest
{

    private $appKey = 'app_key';

    private $appSecret = 'app_secret';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new GenUrlByVIPUrlRequest();
        $req->setUrlList(['https://m.vip.com/product-1710696933-6918347193125144197.html', 'https://m.vip.com/product-1710613243-6917923666763297947.html']);
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new UnionGenUrlByVIPUrlTest())();
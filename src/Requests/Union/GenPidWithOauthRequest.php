<?php

/**
 * 创建推广位PID
 *
 * @link: http://vop.vip.com/apicenter/method?serviceName=com.vip.adp.api.open.service.UnionPidService-1.0.0&methodName=genPidWithOauth
 *
 * Created by PhpStorm.
 * Date: 2020/03/13
 */

namespace SmartJson\Vip\Requests\Union;

use SmartJson\Vip\Interfaces\Request;
use SmartJson\Vip\Libs\Util;

class GenPidWithOauthRequest implements Request
{

    /**
     * 服务
     *
     * @var string
     */
    public $service = 'com.vip.adp.api.open.service.UnionPidService';

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'genPidWithOauth';

    /**
     * 版本号
     *
     * @var string
     */
    public $version = '1.0.0';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pidNameList;

    private $apiParams = [];


    public function setPidNameList($val)
    {
        $this->pidNameList = $val;
        $this->apiParams['pidNameList'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['requestId'] = Util::requestId();

        return ['pidGenRequest' => $this->apiParams];
    }

}
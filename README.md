# SmartJson/Vip

#### 介绍
本类库是对唯品会开放平台API的封装
接口文档请参见 [唯品会开放平台](https://vop.vip.com/)

#### 关键字段说明
```
appkey:创建应用时生成，为接口调用凭证之一
appsecret：创建应用时生成，为接口调用凭证之一
accessToken：通过Oauth认证授权时生成，参考：http://vop.vip.com/doccenter/viewdoc/33
sign:调用签名，建议在异常捕获中记录该值，可以提高开放平台定位异常的效率，具体生成规则参考：http://vop.vip.com/doccenter/viewdoc/8#A4
```

#### 安装
```
composer require opensdk/vip
```

#### 使用示例
- 接口调用示例
~~~php
require 'vendor/autoload.php';  

use SmartJson\Vip\Client;  
use SmartJson\Vip\Requests\Union\GenPidRequest;  

$c = new Client();  
$c->appKey = 'You are appKey';  
$c->appSecret = 'You are appSecret';  
$req = new GenPidRequest();  
$req->setPidNameList(['test01','test02']);  
$c->setRequest($req);  
$result = $c->execute();  

var_dump($result);
~~~

- 授权示例
~~~php
require 'vendor/autoload.php';  

use SmartJson\Vip\OauthClient;  

$c = new OauthClient();  
$c->appKey = 'You are appKey';  
$c->appSecret = 'You are appSecret';  
// 获取网页授权链接
// $result = $c->buildWebAuthorizeUri();  
// 获取APP授权链接
$result = $c->buildAppAuthorizeUri();  
// 使用code换取access token
$result = $c->getAccessToken('12345643234');  

var_dump($result);
~~~
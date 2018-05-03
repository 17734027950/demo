<?PHP
	require_once __DIR__.'/../vendor/autoload.php';
	
	$_SESSION = array();
    $type = $this->ev->get('type');
    $hash = $this->ev->get('hash');
    $callback = "http://www.languagebnu.com/index.php?default-phone-callback&type={$type}&hash={$hash}";
    if($type=='qq'){
        $qqOAuth = new \Yurun\OAuthLogin\QQ\OAuth2('appid', 'appkey', $callback);

        // 获取登录授权跳转页地址
        $url = $qqOAuth->getAuthUrl();
        // 存储sdk自动生成的state，回调处理时候要验证
        $_SESSION['YURUN_QQ_STATE'] = $qqOAuth->state;
        // 跳转到登录页
        header('location:' . $url);
    }elseif($type=='wxpc'){

        $wxOAuth = new \Yurun\OAuthLogin\Weixin\OAuth2('wx7e756cf8baba1154', 'd67f347f6f0810db0129e893530af3ca', $callback);

        // 获取登录授权跳转页地址
        $url = $wxOAuth->getWeixinAuthUrl();
        // 存储sdk自动生成的state，回调处理时候要验证
        $_SESSION['YURUN_WXPC_STATE'] = $wxOAuth->state;
        // 跳转到登录页
        // echo $url;
        header('location:'.$url);

    }elseif($type=='wx'){
        $wxOAuth = new \Yurun\OAuthLogin\Weixin\OAuth2('wx7e756cf8baba1154', 'd67f347f6f0810db0129e893530af3ca', $callback);

        // 获取登录授权跳转页地址
        $url = $wxOAuth->getWeixinAuthUrl();
        // 存储sdk自动生成的state，回调处理时候要验证
        $_SESSION['YURUN_WX_STATE'] = $wxOAuth->state;
        // 跳转到登录页
        // echo $url;
        header('location:'.$url);
    }
?>
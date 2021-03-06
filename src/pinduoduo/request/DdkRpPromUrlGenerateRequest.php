<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2018/11/20
 * Time: 下午6:45
 */

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkRpPromUrlGenerateRequest implements RequestInterface
{
    /**
     * 生成红包推广链接接口
     * @var string
     */
    private $type = 'pdd.ddk.rp.prom.url.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

    /**
     * 唤起微信app推广短链接
     * @var
     */
    private $weappWebviewShortUrl;

    /**
     * 唤起微信app推广链接
     * @var
     */
    private $weappWebviewUrl;
    /**
     * 是否生成小程序推广
     * @var
     */
    private $generateWeApp;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    public function getGenerateWeApp()
    {
        return $this->generateWeApp;
    }

    /**
     * @return mixed
     */
    public function getWeappWebviewShortUrl()
    {
        return $this->weappWebviewShortUrl;
    }

    /**
     * @param mixed $weappWebviewShortUrl
     */
    public function setWeappWebviewShortUrl($weappWebviewShortUrl)
    {
        $this->weappWebviewShortUrl = $weappWebviewShortUrl;
    }

    /**
     * @return mixed
     */
    public function getWeappWebviewUrl()
    {
        return $this->weappWebviewUrl;
    }

    /**
     * @param mixed $weappWebviewUrl
     */
    public function setWeappWebviewUrl($weappWebviewUrl)
    {
        $this->weappWebviewUrl = $weappWebviewUrl;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id_list' => $this->pid,
            'generate_short_url' => $this->generateShortUrl,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'we_app_web_view_short_url' => $this->weappWebviewShortUrl,
            'we_app_web_wiew_url' => $this->weappWebviewUrl,
            'generate_we_app' => $this->generateWeApp,
        ];
        return array_filter($params);
    }
}
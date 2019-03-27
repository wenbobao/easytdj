<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2018/11/20
 * Time: 下午6:45
 */

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkCmsPromUrlGenerateRequest implements RequestInterface
{
    /**
     * 生成商城推广链接接口
     * @var string
     */
    private $type = 'pdd.ddk.cms.prom.url.generate';

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
     *是否生成手机跳转链接。true-是，false-否，默认false
     * @var
     */
    private $generateMobile;

    /**
     *单人团多人团标志。true-多人团，false-单人团 默认false
     * @var
     */
    private $multiGroup;

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
     * 0, "1.9包邮"；1, "今日爆款"； 2, "品牌清仓"； 4,"PC端专属商城"；5, "养宝宝兑现金"；不传值为默认商城
     * @var
     */
    private $channelType;

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

    /**
     * @return mixed
     */
    public function getGenerateMobile()
    {
        return $this->generateMobile;
    }

    /**
     * @param mixed $generateMobile
     */
    public function setGenerateMobile($generateMobile)
    {
        $this->generateMobile = $generateMobile;
    }

    /**
     * @return mixed
     */
    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @return mixed
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id_list' => $this->pid,
            'generate_short_url' => $this->generateShortUrl,
            'generate_mobile' => $this->generateMobile,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'we_app_web_view_short_url' => $this->weappWebviewShortUrl,
            'we_app_web_wiew_url' => $this->weappWebviewUrl,
            'channel_type' => $this->channelType,
        ];
        return array_filter($params);
    }
}
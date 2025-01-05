<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsZsUnitUrlGenRequest implements  RequestInterface
{

    /**
     * 本接口用于将其他推广者的推广链接直接转换为自己的，如果您的推广场景为采集群，可直接使用此接口
     * @var string
     */
    private $type = 'pdd.ddk.goods.zs.unit.url.gen';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $source_url;

    /**
     * 自定义参数
     * @var
     */
    private $customParameters;


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

    public function setSourceUrl($source_url)
    {
        $this->source_url = $source_url;
    }

    public function getSourceUrl()
    {
        return $this->goodsIdList;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }


    public function getParams()
    {
        $params = [
            'type'                   => $this->type,
            'pid'                   => $this->pid,
            'custom_parameters' => $this->customParameters,
            'source_url'        => $this->source_url,
        ];
        return array_filter($params);
    }
}
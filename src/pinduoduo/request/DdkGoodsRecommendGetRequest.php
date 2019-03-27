<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsRecommendGetRequest implements RequestInterface
{

    private $type = 'pdd.ddk.goods.recommend.get';

    /**
     * 从多少位置开始请求；默认值 ： 0
     * @var
     */
    private $offset;

    /**
     * 请求数量；默认值 ： 400
     * @var
     */
    private $limit;

    /**
     * 频道类型；0, "1.9包邮", 1, "今日爆款", 2, "品牌清仓", 3, "默认商城", 非必填 ,默认是1
     * @var
     */
    private $channelType;

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
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

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'channel_type' => intval($this->channelType),
            'pid' => $this->pid,
            'custom_parameters' => $this->custom_parameters,
        ];
        return $params;
    }
}
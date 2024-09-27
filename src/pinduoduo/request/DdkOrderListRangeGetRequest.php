<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;



class DdkOrderListRangeGetRequest implements RequestInterface
{
    /**
     * 本接口可以订单支付时间为维度供您同步订单
     * 按照时间段获取授权多多客下面所有多多客的推广订单信息
     * @var string
     */
    private $type = 'pdd.ddk.order.list.range.get';

    //支付起始时间，格式: "yyyy-MM-dd HH:mm:ss" ，比如 "2020-12-01 00:00:00"
    private $startUpdateTime;
    
    //支付结束时间，格式: "yyyy-MM-dd HH:mm:ss" ，比如 "2020-12-01 00:00:00"
    private $endUpdateTime;

    //每次请求多少条，建议300
    private $pageSize;

    //上一次的迭代器id(第一次不填)  STRING
    private $lastOrderId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setStartUpdateTime($startUpdateTime)
    {
        $this->startUpdateTime = $startUpdateTime;
    }

    public function getStartUpdateTime()
    {
        return $this->startUpdateTime;
    }

    public function setEndUpdateTime($endUpdateTime)
    {
        $this->endUpdateTime = $endUpdateTime;
    }

    public function getEndUpdateTime()
    {
        return $this->endUpdateTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    public function getParams()
    {
        $params = [
            'type'              => $this->type,
            'start_time' => $this->startUpdateTime,
            'end_time'   => $this->endUpdateTime,
            'page_size'         => $this->pageSize,
            'last_order_id'              => $this->lastOrderId
        ];
        return array_filter($params);
    }
}
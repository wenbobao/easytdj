<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;



class DdkOrderListIncrementGetRequest implements RequestInterface
{
    /**
     * 最后更新时间段增量同步推广订单信息
     * 按照时间段获取授权多多客下面所有多多客的推广订单信息
     * https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.order.list.increment.get
     * @var string
     */
    private $type = 'pdd.ddk.order.list.increment.get';

    private $cashGiftOrder;

    private $endUpdateTime;

    private $page;

    private $pageSize;

    private $queryOrderType;

    private $returnCount;

    private $startUpdateTime;

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

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return mixed
     */
    public function getCashGiftOrder()
    {
        return $this->cashGiftOrder;
    }

    /**
     * @param mixed $cashGiftOrder
     */
    public function setCashGiftOrder($cashGiftOrder)
    {
        $this->cashGiftOrder = $cashGiftOrder;
    }

    /**
     * @return mixed
     */
    public function getQueryOrderType()
    {
        return $this->queryOrderType;
    }

    /**
     * @param mixed $queryOrderType
     */
    public function setQueryOrderType($queryOrderType)
    {
        $this->queryOrderType = $queryOrderType;
    }

    /**
     * @return mixed
     */
    public function getReturnCount()
    {
        return $this->returnCount;
    }

    /**
     * @param mixed $returnCount
     */
    public function setReturnCount($returnCount)
    {
        $this->returnCount = $returnCount;
    }

    public function getParams()
    {
        $params = [
            'type'              => $this->type,
            'cash_gift_order' => $this->cashGiftOrder,
            'end_update_time'   => $this->endUpdateTime,
            'page'              => $this->page,
            'page_size'         => $this->pageSize,
            'query_order_type' => $this->queryOrderType,
            'return_count' => $this->returnCount,
            'start_update_time' => $this->startUpdateTime,
        ];
        return array_filter($params);
    }
}
<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;

class DdkCashGiftDataQueryRequest implements  RequestInterface
{

    /**
     * 查询多多礼金效果数据
     * https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.cashgift.data.query
     * @var string
     */
    private $type = 'pdd.ddk.cashgift.data.query';

    private $cash_gift_id;

    private $end_time;

    private $page;

    private $page_size;

    private $start_time;

    /**
     * @return mixed
     */
    public function getCashGiftId()
    {
        return $this->cash_gift_id;
    }

    /**
     * @param mixed $cash_gift_id
     */
    public function setCashGiftId($cash_gift_id)
    {
        $this->cash_gift_id = $cash_gift_id;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param mixed $page_size
     */
    public function setPageSize($page_size)
    {
        $this->page_size = $page_size;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'cash_gift_id' => $this->cash_gift_id,
            'end_time' => $this->end_time,
            'page' => $this->page,
            'page_size' => $this->page_size,
            'start_time' => $this->start_time,
        ];
        return array_filter($params);
    }
}
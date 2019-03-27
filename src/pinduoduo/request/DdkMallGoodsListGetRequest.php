<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkMallGoodsListGetRequest implements RequestInterface
{

    /**
     * 查询店铺商品
     * @var string
     */
    private $type = 'pdd.ddk.mall.goods.list.get';

    /**
     * 店铺id
     * @var
     */
    private $mallId;

    /**
     * 每页商品数量
     * @var string
     */

    private $pageSize;

    /**
     * 分页数
     * @var string
     */
    private $page;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setMallId($mallId)
    {
        $this->mallId = $mallId;
    }

    public function getMallId()
    {
        return $this->mallId;
    }

    /**
     * @return string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param string $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'mall_id' => $this->mallId,
            'page_number' => $this->page,
            'page_size' => $this->pageSize
        ];
        return array_filter($params);
    }
}
<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsDetailRequest implements RequestInterface
{
    /**
     * 查询多多进宝商品详情
     * @var string
     */
    private $type = 'pdd.ddk.goods.detail';


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

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;


    /**
     * @return mixed
     */
    public function getGoodsSign()
    {
        return $this->goodsSign;
    }

    /**
     * @param mixed $goodsSign
     */
    public function setGoodsSign($goodsSign)
    {
        $this->goodsSign = $goodsSign;
    }

    /**
     * @return mixed
     */
    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param mixed $searchId
     */
    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;
    }


    private $goodsSign;


    // 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口
    private $searchId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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

    /**
     * @return mixed
     */
    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    /**
     * @param mixed $zsduoId
     */
    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_sign' => $this->goodsSign,
            'custom_parameters' => $this->customParameters,
            'pid' => $this->pid,
            'search_id' => $this->searchId,
            'zs_duo_id' => $this->zsduoId,
        ];
        return array_filter($params);
    }
}
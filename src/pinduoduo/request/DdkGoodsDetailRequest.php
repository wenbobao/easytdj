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
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

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
     * 佣金优惠券对应推广类型，3：专属 4：招商
     * @var
     */
    private $planType;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
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

    /**
     * @return mixed
     */
    public function getPlanType()
    {
        return $this->planType;
    }

    /**
     * @param mixed $planType
     */
    public function setPlanType($planType)
    {
        $this->planType = $planType;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'goods_id_list' => $this->goodsIdList,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters,
            'zs_duo_id' => $this->zsduoId,
            'plan_type' => $this->planType
        ];
        return array_filter($params);
    }
}
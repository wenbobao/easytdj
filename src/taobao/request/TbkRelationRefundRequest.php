<?php

namespace WenboBao\EasyTDJ\TaoBao\Request;

use WenboBao\EasyTDJ\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.relation.refund  request
 * 淘宝客维权退款订单查询-渠道管理和会员运营管理专用
 * @author auto create
 * @since 1.0, 2020.11.23
 */
class TbkRelationRefundRequest
{
    private $searchOption;


    private $apiParas = array();

    /**
     * @return mixed
     */
    public function getSearchOption()
    {
        return $this->searchOption;
    }

    /**
     * @param mixed $searchOption
     */
    public function setSearchOption($searchOption)
    {
        $this->searchOption = $searchOption;
        $this->apiParas["search_option"] = $searchOption;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.relation.refund";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}

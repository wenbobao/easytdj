<?php

namespace WenboBao\EasyTDJ\TaoBao\Domain;

/**
 * 入参的对象
 * @author auto create
 */
class TopApiAfOrderOption
{
    /**
     * pid中的第二段，siteId
     **/
    public $site_id;

    /**
     * pid中的第三段，adzoneId
     **/
    public $adzone_id;

    /**
     * 渠道关系id
     **/
    public $relation_id;

    /**
     * 子订单号
     **/
    public $tb_trade_id;

    /**
     * 查询开始时间，以taoke订单创建时间开始  2018-11-11 00:01:01
     **/
    public $start_time;

    /**
     * 查询时间跨度，不超过30天，单位是天
     **/
    public $span;

    /**
     * pageNo
     **/
    public $page_no;

    /**
     * pagesize
     **/
    public $page_size;

    /**
     * 此参数不再使用，请勿入参
     **/
    public $tb_trade_parent_id;

    /**
     * 此参数不再使用，请勿入参
     **/
    public $special_id;

    /**
     * 此参数不再使用，请勿入参
     **/
    public $violation_type;

    /**
     * 此参数不再使用，请勿入参
     **/
    public $punish_status;
}
?>
<?php

namespace WenboBao\EasyTDJ\TaoBao\Request;

use WenboBao\EasyTDJ\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.privilege.get request
 *
 * @author auto create
 * @since 1.0, 2017.05.24
 */
class TbkPrivilegeGetRequest
{
    /**
     * 淘客商品id
     **/
    private $itemId;

    /**
     * 推广位id，mm_xx_xx_xx pid三段式中的第三段
     **/
    private $adzoneId;

    /**
     * 1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
     * 备案的网站id, mm_xx_xx_xx pid三段式中的第二段
     **/
    private $siteId;

    /**
     * 渠道关系ID，仅适用于渠道推广场景
     **/
    private $relationId;


    /**
     * 会员运营ID
     **/
    private $specialId;

    /**
     * @return mixed
     */
    public function getSpecialId()
    {
        return $this->specialId;
    }

    /**
     * @param mixed $specialId
     */
    public function setSpecialId($specialId)
    {
        $this->specialId = $specialId;
        $this->apiParas["special_id"] = $specialId;
    }

    /**
     * 淘宝客外部用户标记，如自身系统账户ID；微信ID等
     **/
    private $externalId;

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        $this->apiParas["external_id"] = $externalId;
    }


    private $apiParas = array();


    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setPlatform($platform)
    {
        $this->platform = $platform;
        $this->apiParas["platform"] = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        $this->apiParas["site_id"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzone_id"] = $adzoneId;
    }

    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    public function getRelationId()
    {
        return $this->relationId;
    }

    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        $this->apiParas["relation_id"] = $relationId;
    }


    public function getApiMethodName()
    {
        return "taobao.tbk.privilege.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        RequestCheckUtil::checkNotNull($this->siteId, "siteId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}

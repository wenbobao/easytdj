<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2018/11/20
 * Time: 下午6:45
 */

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkRpPromUrlGenerateRequest implements RequestInterface
{
    /**
     * 生成红包推广链接接口
     * @var string
     */
    private $type = 'pdd.ddk.rp.prom.url.generate';


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @JsonProperty(Long, "amount")
     */
    private $amount;

    /**
     * @JsonProperty(Integer, "channel_type")
     */
    private $channelType;

    /**
     * @JsonProperty(String, "custom_parameters")
     */
    private $customParameters;

    private $diyLotteryParam;

    private  $diyOneYuanParam;

    /**
     * @param mixed $diyOneYuanParam
     */
    public function setDiyOneYuanParam($diyOneYuanParam): void
    {
        $this->diyOneYuanParam = $diyOneYuanParam;
    }

    private $diyRedPacketParam;

    /**
     * @JsonProperty(Boolean, "generate_qq_app")
     */
    private $generateQqApp;

    /**
     * @JsonProperty(Boolean, "generate_schema_url")
     */
    private $generateSchemaUrl;

    /**
     * @JsonProperty(Boolean, "generate_short_url")
     */
    private $generateShortUrl;

    /**
     * @JsonProperty(Boolean, "generate_we_app")
     */
    private $generateWeApp;

    /**
     * @JsonProperty(List<String>, "p_id_list")
     */
    private $pIdList;

    /**
     * @JsonProperty(Long, "scratch_card_amount")
     */
    private $scratchCardAmount;

    private  $diySpRedPacketParam;

    /**
     * @param mixed $diySpRedPacketParam
     */
    public function setDiySpRedPacketParam($diySpRedPacketParam): void
    {
        $this->diySpRedPacketParam = $diySpRedPacketParam;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function setDiyLotteryParam($diyLotteryParam)
    {
        $this->diyLotteryParam = $diyLotteryParam;
    }

    public function setDiyRedPacketParam($diyRedPacketParam)
    {
        $this->diyRedPacketParam = $diyRedPacketParam;
    }

    public function setGenerateQqApp($generateQqApp)
    {
        $this->generateQqApp = $generateQqApp;
    }

    public function setGenerateSchemaUrl($generateSchemaUrl)
    {
        $this->generateSchemaUrl = $generateSchemaUrl;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    public function setPIdList($pIdList)
    {
        $this->pIdList = $pIdList;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setScratchCardAmount($scratchCardAmount)
    {
        $this->scratchCardAmount = $scratchCardAmount;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'amount' => $this->amount,
            'channel_type' => $this->channelType,
            'custom_parameters' => $this->customParameters,
            'diy_one_yuan_param' => $this->diyOneYuanParam,
            'diy_red_packet_param' => $this->diyRedPacketParam,
            'generate_qq_app' => $this->generateQqApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_short_url' => $this->generateShortUrl,
            'generate_we_app' => $this->generateWeApp,
            'p_id_list' => $this->pIdList,
            'scratch_card_amount' => $this->scratchCardAmount,
            'diy_sp_red_packet_param' => $this->diySpRedPacketParam,
        ];
        return array_filter($params);
    }
}
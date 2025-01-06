<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsPromotionUrlGenerateRequest implements  RequestInterface
{

    /**
     * 生成普通商品推广链接
     * @var string
     */
    private $type = 'pdd.ddk.goods.promotion.url.generate';


    /*
     * @JsonProperty(LONG, "cash_gift_id")
     */
    private $cashGiftId;

    /*
 * @JsonProperty(String, "cash_gift_name")
 */
    private $cashGiftName;

    /**
     * @JsonProperty(String, "custom_parameters")
     */
    private $customParameters;

    /**
     * @JsonProperty(Boolean, "generate_authority_url")
     */
    private $generateAuthorityUrl;

    /**
     * @JsonProperty(Boolean, "generate_mall_collect_coupon")
     */
    private $generateMallCollectCoupon;

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
     * @JsonProperty(String[], "goods_sign_list")
     */
    private $goodsSignList;

    /**
     * @JsonProperty(String, "material_id")
     */
    private $materialId;

    /**
     * @JsonProperty(Boolean, "multi_group")
     */
    private $multiGroup;

    /**
     * @JsonProperty(String, "p_id")
     */
    private $pId;

    /**
     * @JsonProperty(String, "search_id")
     */
    private $searchId;

    /**
     * @JsonProperty(Long, "zs_duo_id")
     */
    private $zsDuoId;

    /**
     * @JsonProperty(Boolean, "generate_short_link")
     */
    private $generateShortLink;

    /**
     * @JsonProperty(Boolean, "generate_weixin_code")
     */
    private $generateWeixinCode;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
    
    public function setCashGiftId($cashGiftId) {
        $this->cashGiftId = $cashGiftId;
    }

    /**
     * @param mixed $cashGiftName
     */
    public function setCashGiftName($cashGiftName): void
    {
        $this->cashGiftName = $cashGiftName;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function setGenerateAuthorityUrl($generateAuthorityUrl)
    {
        $this->generateAuthorityUrl = $generateAuthorityUrl;
    }

    public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
    {
        $this->generateMallCollectCoupon = $generateMallCollectCoupon;
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

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function setGenerateWeiboappWebview($generateWeiboappWebview)
    {
        $this->generateWeiboappWebview = $generateWeiboappWebview;
    }

    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    public function setGoodsSignList($goodsSignList)
    {
        $this->goodsSignList = $goodsSignList;
    }

    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;
    }

    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

    /**
     * @param mixed $generateShortLink
     */
    public function setGenerateShortLink($generateShortLink): void
    {
        $this->generateShortLink = $generateShortLink;
    }

    /**
     * @param mixed $generateWeixinCode
     */
    public function setGenerateWeixinCode($generateWeixinCode): void
    {
        $this->generateWeixinCode = $generateWeixinCode;
    }

    /**
     * @param mixed $materialId
     */
    public function setMaterialId($materialId): void
    {
        $this->materialId = $materialId;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'cash_gift_id' => $this->cashGiftId,
            'cash_gift_name' => $this->cashGiftName,
            'custom_parameters' => $this->customParameters,
            'generate_authority_url' => $this->generateAuthorityUrl,
            'generate_mall_collect_coupon' => $this->generateMallCollectCoupon,
            'generate_qq_app' => $this->generateQqApp,
            'generate_schema_url' => $this->generateSchemaUrl,
            'generate_short_url' => $this->generateShortUrl,
            'generate_we_app' => $this->generateWeApp,
            'goods_sign_list' => $this->goodsSignList,
            'material_id' => $this->materialId,
            'multi_group' => $this->multiGroup,
            'p_id' => $this->pId,
            'search_id' => $this->searchId,
            'generate_short_link' => $this->generateShortLink,
            'generate_weixin_code' => $this->generateWeixinCode,
            'zs_duo_id' => $this->zsDuoId,
        ];
        return array_filter($params);
    }
}
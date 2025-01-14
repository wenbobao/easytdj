<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;

class DdkCashGiftCreateRequest implements  RequestInterface
{

    /**
     * 用于渠道创建多多礼金
     * https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.cashgift.create
     * @var string
     */
    private $type = 'pdd.ddk.cashgift.create';

    /**
     * @JsonProperty(Long, "acquire_end_time")
     */
    private $acquireEndTime;

    /**
     * @JsonProperty(Long, "acquire_start_time")
     */
    private $acquireStartTime;

    /**
     * @JsonProperty(Boolean, "auto_take")
     */
    private $autoTake;

    /**
     * @JsonProperty(Integer, "coupon_amount")
     */
    private $couponAmount;

    /**
     * @JsonProperty(Integer, "coupon_threshold_amount")
     */
    private $couponThresholdAmount;

    /**
     * @JsonProperty(Integer, "duration")
     */
    private $duration;

    /**
     * @JsonProperty(Integer, "except_amount")
     */
    private $exceptAmount;


    /**
     * @JsonProperty(Boolean, "fetch_risk_check")
     */
    private $fetchRiskCheck;

    /**
     * @JsonProperty(INTEGER, "freeze_condition")
     */
    private $freezeCondition;

    /**
     * @JsonProperty(INTEGER, "freeze_watch_type")
     */
    private $freezeWatch_type;

    /**
     * @JsonProperty(Boolean, "generate_flexible_coupon")
     */
    private $generateFlexibleCoupon;

    /**
     * @JsonProperty(Boolean, "generate_global")
     */
    private $generateGlobal;


    /**
     * @JsonProperty(STRING[], "goods_sign_list	")
     */
    private $goodsSignList;

    /**
     * @JsonProperty(Long, "link_acquire_limit")
     */
    private $linkAcquireLimit;

    /**
     * @JsonProperty(String, "name")
     */
    private $name;

    /**
     * @JsonProperty(STRING[], "p_id_list	")
     */
    private $pIdList;

    /**
     * @JsonProperty(Long, "quantity")
     */
    private $quantity;

    /**
     * @JsonProperty(Boolean, "rate_decrease_monitor")
     */
    private $rateDecreaseMonitor;

    /**
     * @JsonProperty(Integer, "relative_time_type")
     */
    private $relativeTimeType;

    /**
     * @JsonProperty(Integer, "total_amount")
     */
    private $totalAmount;

    /**
     * @JsonProperty(Integer, "user_limit")
     */
    private $userLimit;

    /**
     * @JsonProperty(Long, "validity_end_time")
     */
    private $validityEndTime;

    /**
     * @JsonProperty(Long, "validity_start_time")
     */
    private $validityStartTime;

    /**
     * @JsonProperty(Integer, "validity_time_type")
     */
    private $validityTimeType;

    /**
     * @JsonProperty(Integer, "cashgift_type")
     */
    private $cashgiftType;

    /**
     * @return mixed
     */
    public function getAcquireEndTime()
    {
        return $this->acquireEndTime;
    }

    /**
     * @param mixed $acquireEndTime
     */
    public function setAcquireEndTime($acquireEndTime)
    {
        $this->acquireEndTime = $acquireEndTime;
    }

    /**
     * @return mixed
     */
    public function getAcquireStartTime()
    {
        return $this->acquireStartTime;
    }

    /**
     * @param mixed $acquireStartTime
     */
    public function setAcquireStartTime($acquireStartTime)
    {
        $this->acquireStartTime = $acquireStartTime;
    }

    /**
     * @return mixed
     */
    public function getAutoTake()
    {
        return $this->autoTake;
    }

    /**
     * @param mixed $autoTake
     */
    public function setAutoTake($autoTake)
    {
        $this->autoTake = $autoTake;
    }

    /**
     * @return mixed
     */
    public function getCouponAmount()
    {
        return $this->couponAmount;
    }

    /**
     * @param mixed $couponAmount
     */
    public function setCouponAmount($couponAmount)
    {
        $this->couponAmount = $couponAmount;
    }

    /**
     * @return mixed
     */
    public function getCouponThresholdAmount()
    {
        return $this->couponThresholdAmount;
    }

    /**
     * @param mixed $couponThresholdAmount
     */
    public function setCouponThresholdAmount($couponThresholdAmount)
    {
        $this->couponThresholdAmount = $couponThresholdAmount;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getExceptAmount()
    {
        return $this->exceptAmount;
    }

    /**
     * @param mixed $exceptAmount
     */
    public function setExceptAmount($exceptAmount)
    {
        $this->exceptAmount = $exceptAmount;
    }

    /**
     * @return mixed
     */
    public function getFetchRiskCheck()
    {
        return $this->fetchRiskCheck;
    }

    /**
     * @param mixed $fetchRiskCheck
     */
    public function setFetchRiskCheck($fetchRiskCheck)
    {
        $this->fetchRiskCheck = $fetchRiskCheck;
    }

    /**
     * @return mixed
     */
    public function getFreezeCondition()
    {
        return $this->freezeCondition;
    }

    /**
     * @param mixed $freezeCondition
     */
    public function setFreezeCondition($freezeCondition)
    {
        $this->freezeCondition = $freezeCondition;
    }

    /**
     * @return mixed
     */
    public function getFreezeWatchType()
    {
        return $this->freezeWatch_type;
    }

    /**
     * @param mixed $freezeWatch_type
     */
    public function setFreezeWatchType($freezeWatch_type)
    {
        $this->freezeWatch_type = $freezeWatch_type;
    }

    /**
     * @return mixed
     */
    public function getGenerateFlexibleCoupon()
    {
        return $this->generateFlexibleCoupon;
    }

    /**
     * @param mixed $generateFlexibleCoupon
     */
    public function setGenerateFlexibleCoupon($generateFlexibleCoupon)
    {
        $this->generateFlexibleCoupon = $generateFlexibleCoupon;
    }

    /**
     * @return mixed
     */
    public function getGenerateGlobal()
    {
        return $this->generateGlobal;
    }

    /**
     * @param mixed $generateGlobal
     */
    public function setGenerateGlobal($generateGlobal)
    {
        $this->generateGlobal = $generateGlobal;
    }

    /**
     * @return mixed
     */
    public function getGoodsSignList()
    {
        return $this->goodsSignList;
    }

    /**
     * @param mixed $goodsSignList
     */
    public function setGoodsSignList($goodsSignList)
    {
        $this->goodsSignList = $goodsSignList;
    }

    /**
     * @return mixed
     */
    public function getLinkAcquireLimit()
    {
        return $this->linkAcquireLimit;
    }

    /**
     * @param mixed $linkAcquireLimit
     */
    public function setLinkAcquireLimit($linkAcquireLimit)
    {
        $this->linkAcquireLimit = $linkAcquireLimit;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPIdList()
    {
        return $this->pIdList;
    }

    /**
     * @param mixed $pIdList
     */
    public function setPIdList($pIdList)
    {
        $this->pIdList = $pIdList;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getRateDecreaseMonitor()
    {
        return $this->rateDecreaseMonitor;
    }

    /**
     * @param mixed $rateDecreaseMonitor
     */
    public function setRateDecreaseMonitor($rateDecreaseMonitor)
    {
        $this->rateDecreaseMonitor = $rateDecreaseMonitor;
    }

    /**
     * @return mixed
     */
    public function getRelativeTimeType()
    {
        return $this->relativeTimeType;
    }

    /**
     * @param mixed $relativeTimeType
     */
    public function setRelativeTimeType($relativeTimeType)
    {
        $this->relativeTimeType = $relativeTimeType;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return mixed
     */
    public function getUserLimit()
    {
        return $this->userLimit;
    }

    /**
     * @param mixed $userLimit
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
    }

    /**
     * @return mixed
     */
    public function getValidityEndTime()
    {
        return $this->validityEndTime;
    }

    /**
     * @param mixed $validityEndTime
     */
    public function setValidityEndTime($validityEndTime)
    {
        $this->validityEndTime = $validityEndTime;
    }

    /**
     * @return mixed
     */
    public function getValidityStartTime()
    {
        return $this->validityStartTime;
    }

    /**
     * @param mixed $validityStartTime
     */
    public function setValidityStartTime($validityStartTime)
    {
        $this->validityStartTime = $validityStartTime;
    }

    /**
     * @return mixed
     */
    public function getValidityTimeType()
    {
        return $this->validityTimeType;
    }

    /**
     * @param mixed $validityTimeType
     */
    public function setValidityTimeType($validityTimeType)
    {
        $this->validityTimeType = $validityTimeType;
    }

    /**
     * @return mixed
     */
    public function getCashgiftType()
    {
        return $this->cashgiftType;
    }

    /**
     * @param mixed $cashgiftType
     */
    public function setCashgiftType($cashgiftType)
    {
        $this->cashgiftType = $cashgiftType;
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
            'acquire_end_time' => $this->acquireEndTime,
            'acquire_start_time' => $this->acquireStartTime,
            'auto_take' => $this->autoTake,
            'coupon_amount' => $this->couponAmount,
            'coupon_threshold_amount' => $this->couponThresholdAmount,
            'duration' => $this->duration,
            'except_amount' => $this->exceptAmount,
            'fetch_risk_check' => $this->fetchRiskCheck,
            'freeze_condition' => $this->freezeCondition,
            'freeze_watch_type' => $this->freezeWatch_type,
            'generate_flexible_coupon' => $this->generateFlexibleCoupon,
            'generate_global' => $this->generateGlobal,
            'goods_sign_list' => $this->goodsSignList,
            'link_acquire_limit' => $this->linkAcquireLimit,
            'name' => $this->name,
            'p_id_list' => $this->pIdList,
            'quantity' => $this->quantity,
            'rate_decrease_monitor' => $this->rateDecreaseMonitor,
            'relative_time_type' => $this->relativeTimeType,
            'total_amount' => $this->totalAmount,
            'user_limit' => $this->userLimit,
            'validity_end_time' => $this->validityEndTime,
            'validity_start_time' => $this->validityStartTime,
            'validity_time_type' => $this->validityTimeType,
            'cashgift_type' => $this->cashgiftType,
        ];
        return array_filter($params);
    }
}
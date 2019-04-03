<?php

namespace WenboBao\EasyTDJ\Apith\Request;

use WenboBao\EasyTDJ\Apith\RequestInterface;

class JDCouponQueryRequest implements RequestInterface
{
    /**
     * 优惠券基本信息与状态查询
     * @url https://doc.apith.cn/#/api/jdunion/queryCoupon
     * @var string
     */
    private $method = 'queryCoupon';

    /**
     * 优惠券链接集合
     * @var
     */
    private $couponUrls;

    /**
     * @return mixed
     */
    public function getCouponUrls()
    {
        return $this->couponUrls;
    }

    /**
     * @param mixed $couponUrls
     */
    public function setCouponUrls(array $couponUrls)
    {
        $this->couponUrls = $couponUrls;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'couponUrls' => $this->couponUrls,
        ];

        return array_filter($params);
    }

}
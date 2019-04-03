<?php

namespace WenboBao\EasyTDJ\Apith\Request;

use WenboBao\EasyTDJ\Apith\RequestInterface;

class JDLinkByShortGetRequest implements RequestInterface
{
    /**
     * 根据短链接查询落地页面
     * @url https://doc.apith.cn/#/api/jdunion/getLinkByShort
     * @var string
     */
    private $method = 'getLinkByShort';

        /**
     * 商品编号
     * @var
     */
    private $short;

    /**
     * @return mixed
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param mixed $short
     */
    public function setShort($short)
    {
        $this->short = $short;
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
            'short' => $this->short,
        ];

        return array_filter($params);
    }


}
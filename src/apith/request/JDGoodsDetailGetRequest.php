<?php

namespace WenboBao\EasyTDJ\Apith\Request;

use WenboBao\EasyTDJ\Apith\RequestInterface;

class JDGoodsDetailGetRequest implements RequestInterface
{
    /**
     * 商品详情图片查询
     * @url https://doc.apith.cn/#/api/jdunion/getGoodsDetail?id=%E6%8E%A5%E5%8F%A3%E6%8F%8F%E8%BF%B0
     * @var string
     */
    private $method = 'getGoodsDetail';

    /**
     * 商品编号
     * @var
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
            'id' => $this->id,
        ];

        return array_filter($params);
    }


}
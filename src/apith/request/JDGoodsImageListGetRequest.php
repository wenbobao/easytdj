<?php

namespace WenboBao\EasyTDJ\Apith\Request;

use WenboBao\EasyTDJ\Apith\RequestInterface;

class JDGoodsImageListGetRequest implements RequestInterface
{
    /**
     * 商品主图列表查询
     * @url https://doc.apith.cn/#/api/jdunion/getGoodsImageList
     * @var string
     */
    private $method = 'getGoodsImageList';

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
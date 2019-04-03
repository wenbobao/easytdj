<?php

namespace WenboBao\EasyTDJ\Apith\Request;

use WenboBao\EasyTDJ\Apith\RequestInterface;

class JDPositionQueryRequest implements RequestInterface
{
    /**
     * 推广位查询
     * @url https://doc.apith.cn/#/api/jdunion/queryPosition
     * @var string
     */
    private $method = 'queryPosition';

    /**
     * 联盟推广位类型，1：cps推广位 2：cpc推广位
     * @var
     */
    private $unionType;

    /**
     * 每页条数，上限100
     * @var
     */
    private $pageSize;

    /**
     * 需要查询的目标联盟id
     * @var
     */
    private $unionId;

    /**
     * 目标联盟ID对应的授权key，在联盟推广管理页领取
     * @var
     */
    private $key;

    /**
     * 页码，上限10000
     * @var
     */
    private $pageIndex;

    /**
     * @return mixed
     */
    public function getUnionType()
    {
        return $this->unionType;
    }

    /**
     * @param mixed $unionType
     */
    public function setUnionType($unionType)
    {
        $this->unionType = $unionType;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param mixed $unionId
     */
    public function setUnionId($unionId)
    {
        $this->unionId = $unionId;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param mixed $pageIndex
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
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
            'unionType' => $this->unionType,
            'pageSize' => $this->pageSize,
            'unionId' => $this->unionId,
            'key' => $this->key,
            'pageIndex' => $this->pageIndex,
        ];

        return array_filter($params);
    }
}
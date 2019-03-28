<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkResourceUrlRequest implements RequestInterface
{
    /**
     * 生成拼多多主站频道推广
     * @var string
     */
    private $type = 'pdd.ddk.resource.url.gen';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 频道来源：4-限时秒杀,39997-充值中心, 39998-转链type，39999-电器城
     * @var
     */
    private $resourceType;

    /**
     * 原链接
     * @var
     */
    private $url;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @param mixed $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid' => $this->pid,
            'resource_type' => $this->resourceType,
            'url' => $this->url
        ];
        return array_filter($params);
    }
}
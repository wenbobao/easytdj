<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;


use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;

class DdkThemeGoodsSearchRequest implements RequestInterface
{
    /**
     * 多多进宝主题商品查询
     * @var string
     */
    private $type = 'pdd.ddk.theme.goods.search';

    /**
     * 主题ID
     * @var string
     */
    private $themeId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getThemeId()
    {
        return $this->themeId;
    }

    /**
     * @param string $themeId
     */
    public function setThemeId($themeId)
    {
        $this->themeId = $themeId;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'theme_id' => $this->themeId
        ];
        return array_filter($params);
    }
}
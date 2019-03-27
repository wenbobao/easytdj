<?php

namespace WenboBao\EasyTDJ\PinDuoDuo\Request;


use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;

class DdkThemeListGetRequest implements RequestInterface
{
    /**
     * 查询多多进宝主题列表
     * @var string
     */
    private $type = 'pdd.ddk.theme.list.get';


    /**
     * 返回的每页结果订单数，默认为100，范围为10到100，建议使用40~50，可以提高成功率，减少超时数量。
     * @var string
     */

    private $pageSize;

    /**
     * 第几页，从1到10000，默认1，注：使用最后更新时间范围增量同步时，必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。
     * @var string
     */
    private $page;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'page_size' => $this->pageSize,
            'page' => $this->page
        ];
        return array_filter($params);
    }
}
<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsPidQueryRequest implements  RequestInterface
{
    /**
     * 查询已经生成的推广位信息
     * @var string
     */
    private $type = 'pdd.ddk.goods.pid.query';

    /**
     * 返回的页数
     * @var
     */
    private $page;

    /**
     * 返回的每页推广位数量
     * @var
     */
    private $pageSize;

    private $pidList;

    private $status;

    /**
     * @return mixed
     */
    public function getPidList()
    {
        return $this->pidList;
    }

    /**
     * @param mixed $pidList
     */
    public function setPidList($pidList)
    {
        $this->pidList = $pidList;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'page'      => $this->page,
            'page_size' => $this->pageSize,
            'pid_list' => $this->pidList,
            'status' => $this->status
        ];
        return array_filter($params);
    }
}
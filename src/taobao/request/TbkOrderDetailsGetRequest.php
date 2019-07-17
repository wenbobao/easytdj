<?php

namespace WenboBao\EasyTDJ\TaoBao\Request;
/**
 * TOP API: taobao.tbk.order.details.get
 *  https://open.taobao.com/api.htm?docId=43328&docType=2
 * @author auto create
 * @since 1.0, 2019.07.17
 */

use WenboBao\EasyTDJ\TaoBao\RequestCheckUtil;

class TbkOrderDetailsGetRequest
{

    /**
     * 订单查询开始时间
     **/
    private $startTime;

    /**
     * 订单查询结束时间，订单开始时间至订单结束时间，
     * 中间时间段日常要求不超过3个小时，
     * 但如618、双11、年货节等大促期间预估时间段不可超过20分钟，
     * 超过会提示错误，调用时请务必注意时间段的选择，以保证亲能正常调用！
     **/
    private $endTime;

    /**
     * 查询时间类型，1：按照订单淘客创建时间查询，2:按照订单淘客付款时间查询，3:按照订单淘客结算时间查询
     **/
    private $queryType;

    /**
     * 跳转类型，当向前或者向后翻页必须提供,-1: 向前翻页,1：向后翻页
     **/
    private $jumpType;

    /**
     * 第几页，默认1，1~100
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * 场景订单场景类型，1:常规订单，2:渠道订单，3:会员运营订单，默认为1
     **/
    private $orderScene;

    /**
     * 淘客订单状态，12-付款，13-关闭，14-确认收货，3-结算成功;不传，表示所有状态
     * 订单状态，1: 全部订单，3：订单结算，12：订单付款， 13：订单失效，14：订单成功；
     * 订单查询类型为‘结算时间’时，只能查订单结算状态
     **/
    private $tkStatus;

    /**
     * 推广者角色类型,2:二方，3:三方，不传，表示所有角色
     **/
    private $memberType;

    /**
     * 位点，除第一页之外，都需要传递；前端原样返回。
     **/
    private $positionIndex;

    private $apiParas = array();

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["start_time"] = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["end_time"] = $endTime;
    }

    /**
     * @return mixed
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * @param mixed $queryType
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
        $this->apiParas["query_type"] = $queryType;
    }

    /**
     * @return mixed
     */
    public function getJumpType()
    {
        return $this->jumpType;
    }

    /**
     * @param mixed $jumpType
     */
    public function setJumpType($jumpType)
    {
        $this->jumpType = $jumpType;
        $this->apiParas["jump_type"] = $jumpType;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
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
        $this->apiParas["page_size"] = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getOrderScene()
    {
        return $this->orderScene;
    }

    /**
     * @param mixed $orderScene
     */
    public function setOrderScene($orderScene)
    {
        $this->orderScene = $orderScene;
        $this->apiParas["order_scene"] = $orderScene;
    }

    /**
     * @return mixed
     */
    public function getTkStatus()
    {
        return $this->tkStatus;
    }

    /**
     * @param mixed $tkStatus
     */
    public function setTkStatus($tkStatus)
    {
        $this->tkStatus = $tkStatus;
        $this->apiParas["tk_status"] = $tkStatus;
    }

    /**
     * @return mixed
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * @param mixed $memberType
     */
    public function setMemberType($memberType)
    {
        $this->memberType = $memberType;
        $this->apiParas["member_type"] = $memberType;
    }

    /**
     * @return mixed
     */
    public function getPositionIndex()
    {
        return $this->positionIndex;
    }

    /**
     * @param mixed $positionIndex
     */
    public function setPositionIndex($positionIndex)
    {
        $this->positionIndex = $positionIndex;
        $this->apiParas["position_index"] = $positionIndex;
    }


    public function getApiMethodName()
    {
        return "taobao.tbk.order.details.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->endTime, "endTime");
        RequestCheckUtil::checkNotNull($this->startTime, "startTime");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}

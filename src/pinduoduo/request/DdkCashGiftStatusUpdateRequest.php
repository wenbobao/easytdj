<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;

class DdkCashGiftStatusUpdateRequest implements  RequestInterface
{

    /**
     * 用于渠道更新多多礼金状态
     * https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.cashgift.status.update
     * @var string
     */
    private $type = 'pdd.ddk.cashgift.status.update';

    private $cash_gift_id;

    // 礼金更新类型：0-停止礼金推广，1-恢复礼金推广
    private $update_type;

    /**
     * @return mixed
     */
    public function getCashGiftId()
    {
        return $this->cash_gift_id;
    }

    /**
     * @param mixed $cash_gift_id
     */
    public function setCashGiftId($cash_gift_id)
    {
        $this->cash_gift_id = $cash_gift_id;
    }

    /**
     * @return mixed
     */
    public function getUpdateType()
    {
        return $this->update_type;
    }

    /**
     * @param mixed $update_type
     */
    public function setUpdateType($update_type)
    {
        $this->update_type = $update_type;
    }



    public function getType(): string
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'cash_gift_id' => $this->cash_gift_id,
            'update_type' => $this->update_type,
        ];
        return array_filter($params);
    }
}
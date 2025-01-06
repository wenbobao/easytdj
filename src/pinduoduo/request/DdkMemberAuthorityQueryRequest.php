<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkMemberAuthorityQueryRequest implements  RequestInterface
{
    /**
     * 查询已经生成的推广位信息
     * @var string
     */
    private $type = 'pdd.ddk.member.authority.query';


    /**
     * @JsonProperty(String, "pid")
     */
    private $pid;

    /**
     * @JsonProperty(String, "custom_parameters")
     */
    private $customParameters;


    public function setPid($pid) {
        $this->pid = $pid;
    }

    public function setCustomParameters($customParameters) {
        $this->customParameters = $customParameters;
    }


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters
        ];
        return array_filter($params);
    }
}
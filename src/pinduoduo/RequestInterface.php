<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2019/1/8
 * Time: 15:43
 */

namespace WenboBao\EasyTDJ\PinDuoDuo;


interface RequestInterface
{
    public function getParams();

    public function setType($type);

    public function getType();
}
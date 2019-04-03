<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace WenboBao\EasyTDJ\Apith;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}
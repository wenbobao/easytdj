<?php
/**
 * Created by PhpStorm.
 * User: wenbobao
 * Date: 2019/1/8
 * Time: 13:56
 * https://router.jd.com/api?v=1.0&method=jd.union.open.goods.query&access_token=&app_key=ab2ef93a20a5492d8b0dad11ad34b256&sign_method=md5&format=json&timestamp=2019-01-08 14:57:08&sign=B7B42BB545958BBA25DD795FFEDD35E2&param_json={"goodsReqDTO":{"keyword":"女装"}}
 */

namespace WenboBao\EasyTDJ\Apith;


class Application
{
    private static $instance;

    private $gatewayUrl = ' https://jd.vip.apith.cn/unionv2';

    public $appKey;

    public $appSecret;

    public $format = "json";

    public function __construct($appKey = "", $appSecret = "")
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }

    /**
     * 单例获取当前对象
     * @Author: wenbobao
     * @Date: 2018/4/26
     * @return static
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 魔术方法 调用不存在的静态方法时触发
     * @Author: wenbobao
     * @Date: 2018/4/26
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $obj = self::getInstance();
        return $obj->$name($arguments);
    }


    /**
     * 执行
     * @Author: wenbobao
     * @Date: 2018/4/26
     * @param $request
     * @return mixed
     */
    public function execute($request, $access_token = null)
    {
        $requestUrl = $this->gatewayUrl . '/' . $request->getMethod() . "?";
        $params = $request->getParamJson();
        foreach ($params as $k => $v) {
            $requestUrl .= "$k=" . urlencode($v) . '&';
        }

        $requestUrl = substr($requestUrl, 0, -1);

        $header = $this->getHeaders();

        $resp = $this->curl_get($requestUrl, $header);
        return $resp;
    }

    /**
     * 生成加密header
     * @param $request
     * @param $timestamp
     * @return string
     */
    protected function getHeaders()
    {
        $SecretId = $this->appKey;
        $SecretKey = $this->appSecret;

        $dateTime = gmdate("D, d M Y H:i:s T");

        $signature = base64_encode(hash_hmac('sha1', "date: " . $dateTime , $SecretKey, true));
        $authorization = 'hmac id="' . $SecretId . '", algorithm="hmac-sha1", headers="date", signature="'.$signature.'"';

        // 默认curl的 header
        $headers = [
            'Date: ' . $dateTime,
            'Authorization: ' . $authorization
        ];
        return $headers;
    }

    /**
     * get请求
     * @Author: wenbobao
     * @Date: 2019/4/3
     * @param $url
     * @return mixed
     */
    public function curl_get($url, $header = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $data = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        } else {
            curl_close($ch);
            return $data;
        }
    }

}

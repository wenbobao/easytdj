<?php
namespace WenboBao\EasyTDJ\PinDuoDuo\Request;

use WenboBao\EasyTDJ\PinDuoDuo\RequestInterface;


class DdkGoodsSearchRequest implements  RequestInterface
{
    /**
     * 多多进宝商品查询
     * @var string
     */
    private $type = 'pdd.ddk.goods.search';


    private $activity_tags;


    private $block_cat_packages;


    private $block_cats;

    /**
     * 商品类目ID，使用pdd.goods.cats.get接口获取
     * @var
     */
    private $catId;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    private $goods_img_type;

    private $goods_sign_list;

    private $is_brand_goods;

    /**
     * 商品关键词，与opt_id字段选填一个或全部填写
     * @var
     */
    private $keyword;


    private $list_id;





    /**
     * 店铺类型，1-个人，2-企业，3-旗舰店，4-专卖店，5-专营店，6-普通店（未传为全部）
     * @var
     */
    private $merchantType;

    private $merchant_type_list;


    /**
     * 商品标签类目ID，使用pdd.goods.opt.get获取
     * @var
     */
    private $optId;

    /**
     * 默认值1，商品分页数
     * @var
     */
    private $page;

    /**
     * 默认100，每页商品数量
     * @var
     */
    private $pageSize;

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 范围列表，可选值：[{"range_id":0,"range_from":1,"range_to":1500},{"range_id":1,"range_from":1,"range_to":1500}]
     * @var
     */
    private $rangeList;

    /**
     * 排序方式:0-综合排序;1-按佣金比率升序;2-按佣金比例降序;3-按价格升序;4-按价格降序;5-按销量升序;6-按销量降序;7-优惠券金额排序升序;8-优惠券金额排序降序;9-券后价升序排序;10-券后价降序排序;11-按照加入多多进宝时间升序;12-按照加入多多进宝时间降序;13-按佣金金额升序排序;14-按佣金金额降序排序;15-店铺描述评分升序;16-店铺描述评分降序;17-店铺物流评分升序;18-店铺物流评分降序;19-店铺服务评分升序;20-店铺服务评分降序;27-描述评分击败同类店铺百分比升序，28-描述评分击败同类店铺百分比降序，29-物流评分击败同类店铺百分比升序，30-物流评分击败同类店铺百分比降序，31-服务评分击败同类店铺百分比升序，32-服务评分击败同类店铺百分比降序
     * @var
     */
    private $sortType;

    private $use_customized;

    /**
     * 是否只返回优惠券的商品，false返回所有商品，true只返回有优惠券的商品
     * @var
     */
    private $withCoupon;

    /**
     * 商品ID列表。例如：[123456,123]，当入参带有goods_id_list字段，将不会以opt_id、 cat_id、keyword维度筛选商品
     * @var
     */
    private $goodsIdList;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * @return mixed
     */
    public function getActivityTags()
    {
        return $this->activity_tags;
    }

    /**
     * @param mixed $activity_tags
     */
    public function setActivityTags($activity_tags)
    {
        $this->activity_tags = $activity_tags;
    }

    /**
     * @return mixed
     */
    public function getBlockCatPackages()
    {
        return $this->block_cat_packages;
    }

    /**
     * @param mixed $block_cat_packages
     */
    public function setBlockCatPackages($block_cat_packages)
    {
        $this->block_cat_packages = $block_cat_packages;
    }

    /**
     * @return mixed
     */
    public function getBlockCats()
    {
        return $this->block_cats;
    }

    /**
     * @param mixed $block_cats
     */
    public function setBlockCats($block_cats)
    {
        $this->block_cats = $block_cats;
    }

    /**
     * @return mixed
     */
    public function getGoodsImgType()
    {
        return $this->goods_img_type;
    }

    /**
     * @param mixed $goods_img_type
     */
    public function setGoodsImgType($goods_img_type)
    {
        $this->goods_img_type = $goods_img_type;
    }

    /**
     * @return mixed
     */
    public function getGoodsSignList()
    {
        return $this->goods_sign_list;
    }

    /**
     * @param mixed $goods_sign_list
     */
    public function setGoodsSignList($goods_sign_list)
    {
        $this->goods_sign_list = $goods_sign_list;
    }

    /**
     * @return mixed
     */
    public function getIsBrandGoods()
    {
        return $this->is_brand_goods;
    }

    /**
     * @param mixed $is_brand_goods
     */
    public function setIsBrandGoods($is_brand_goods)
    {
        $this->is_brand_goods = $is_brand_goods;
    }

    /**
     * @return mixed
     */
    public function getListId()
    {
        return $this->list_id;
    }

    /**
     * @param mixed $list_id
     */
    public function setListId($list_id)
    {
        $this->list_id = $list_id;
    }

    /**
     * @return mixed
     */
    public function getMerchantTypeList()
    {
        return $this->merchant_type_list;
    }

    /**
     * @param mixed $merchant_type_list
     */
    public function setMerchantTypeList($merchant_type_list)
    {
        $this->merchant_type_list = $merchant_type_list;
    }

    /**
     * @return mixed
     */
    public function getUseCustomized()
    {
        return $this->use_customized;
    }

    /**
     * @param mixed $use_customized
     */
    public function setUseCustomized($use_customized)
    {
        $this->use_customized = $use_customized;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setKeyWord($keyword)
    {
        $this->keyword = $keyword;
    }

    public function getKeyWord()
    {
        return $this->keyword;
    }

    public function setOptId($optId)
    {
        $this->optId = $optId;
    }

    public function getOptId()
    {
        return $this->optId;
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

    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function setWithCoupon($withCoupon)
    {
        $this->withCoupon = $withCoupon;
    }

    public function getWithCoupon()
    {
        return $this->withCoupon;
    }

    public function setRangeList($rangeList)
    {
        $this->rangeList = $rangeList;
    }

    public function getRangeList()
    {
        return $this->rangeList;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }

    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param mixed $catId
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
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
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }


    public function getParams()
    {
        $params = [
            'type'          => $this->type,
            'activity_tags'       => $this->activity_tags,
            'block_cat_packages'       => $this->block_cat_packages,
            'block_cats'       => $this->block_cats,
            'cat_id' => $this->catId,
            'custom_parameters' => $this->customParameters,
            'goods_img_type' => $this->goods_img_type,
            'goods_sign_list' => $this->goods_sign_list,
            'is_brand_goods' => $this->is_brand_goods,
            'keyword' => $this->keyword,
            'list_id' => $this->list_id,
            'merchant_type' => $this->merchantType,
            'merchant_type_list' => $this->merchant_type_list,
            'opt_id' => $this->optId,
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'pid' => $this->pid,
            'range_list' => $this->rangeList,
            'sort_type' => $this->sortType,
            'use_customized' => $this->use_customized,
            'with_coupon' => $this->withCoupon,
        ];

        return array_filter($params);
    }
}
<?php
/**
 * Created by czz.
 * User: czz
 * Date: 2020/5/16
 * Time: 9:16
 */

namespace App\Services;

use App\SupplierMainCategory;
use App\SupplierMainCategoryDetail;
use App\SupplierRelMainCategory;
use App\SupplierRelMainCategoryDetail;
use function array_column;

class SupplierService
{
    /**
     * 主营类目详情
     *
     * @param       $id
     * @param array $detail_ids
     *
     * @return mixed
     * @throws \Exception
     */
    public static function mainCategoryDetail($id, $detail_ids = [])
    {
        $category = SupplierMainCategory::find($id);
        if (empty($category)) throw new \Exception("主营类目不存在");

        $details = $category->load(["detail" => function ($q) use ($detail_ids) {
            if (!empty($detail_ids)) {
                $q->whereIn("id", $detail_ids);
            }
        }])->detail;

        return $details;
    }

    /**
     * 根据供货商的类目id，获取详情
     *
     * @param               $rel_id
     * @param \Closure|null $closure
     *
     * @return array|mixed
     * @throws \Exception
     */
    public static function getRelCategoryDetail($rel_id, \Closure $closure = null)
    {
        $relcate = SupplierRelMainCategory::find($rel_id);

        $reldetail = SupplierRelMainCategoryDetail::where("rel_main_cate_id", $rel_id)->get();

        $detail_ids = array_column($reldetail->toArray(), 'detail_id');

        $details = SupplierService::mainCategoryDetail($relcate->cate_id);

        if (!empty($closure)) {
            return $closure($details, $reldetail->toArray());
        }

        return SupplierService::recombineDetail($details, $reldetail->toArray(), true);
    }

    /**
     * 重新组合主营类目详情，返回特定格式
     *
     * @param       $details
     * @param array $relDetail
     * @param bool  $needUrl
     *
     * @return array
     */
    public static function recombineDetail($details, $relDetail = [], $needUrl = false)
    {
        $listRelDetail = [];
        if (!empty($relDetail)) {
            foreach ($relDetail as $item) {
                $listRelDetail[$item['detail_id']] = $item;
            }
        }

        $list = [];

        foreach ($details as $detail) {
            unset($detail['ctime'], $detail['utime'], $detail['cuid'], $detail['uuid'], $detail['delete_time']);

            if ($needUrl === true) {
                $detail['url'] = '';
                isset($listRelDetail[$detail['id']]) && $detail['detail_url'] = $listRelDetail[$detail['id']]['detail_url'];
            }

            if ($detail['cate_type'] == 1) {
                $list['pic_cailiao'][] = $detail;
            }

            if ($detail['cate_type'] == 2) {
                $list['file_cailiao'][] = $detail;
            }
        }

        return $list;
    }

    public static function addRelCateDetail($relId, $data)
    {
        $data = [
            [
                'detail_id' => 2,
                'is_required' => 1,
                'detail_url' => 'http://wrwewrwe.jpg',
            ],
            [
                'detail_id' => 3,
                'is_required' => 2,
                'detail_url' => 'http://wrwewrwe.jpg',
            ],
        ];

        $detail_ids = array_column($data, 'detail_id');
        $details = SupplierMainCategoryDetail::whereIn("id", $detail_ids)->get();

        $idata = [];
        foreach ($data as $item) {
            if (empty($item['is_required'])) throw new \Exception("缺少参数：is_required");
            if (empty($item['detail_id'])) throw new \Exception("detail_id为空");
            if ($item['is_required'] == 1 && empty($item['detail_url'])) throw new \Exception("detail_url为空");
            $idata[] = [
                'rel_cate_id' => $relId,
                'detail_id' => $item['detail_id'],
                'detail_url' => $item['detail_url'],
            ];
        }

        // TODO
        SupplierRelMainCategoryDetail::where("rel_cate_id", $relId)->delete();
        SupplierRelMainCategoryDetail::create($idata);
    }

}

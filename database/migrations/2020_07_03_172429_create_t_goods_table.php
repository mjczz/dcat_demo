<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods', function (Blueprint $table) {
            $table->increments('id')->comment('商品ID');
            $table->string('bn', 128)->nullable()->unique('uk_bn')->comment('商品编码');
            $table->char('sup_code', 14)->default('')->comment('供应商编码');
            $table->string('name', 200)->nullable()->comment('商品名称');
            $table->string('brief')->nullable()->comment('商品简介');
            $table->decimal('price', 10)->nullable()->comment('商品价格');
            $table->decimal('costprice', 10)->nullable()->comment('成本价');
            $table->decimal('mktprice', 10)->nullable()->index('mktprice')->comment('市场价');
            $table->decimal('commission', 10)->comment('推广佣金');
            $table->decimal('member_commissions', 10)->comment('会员佣金');
            $table->char('image_id')->nullable()->comment('默认图片 图片id');
            $table->string('activity_list_image')->default('')->comment('活动列表图片');
            $table->unsignedInteger('goods_cat_id')->nullable()->comment('商品分类ID 关联category.id');
            $table->integer('jd_cat_id')->nullable()->comment('京东商品分类ID');
            $table->unsignedInteger('goods_type_id')->nullable()->comment('商品类别ID 关联goods_type.id');
            $table->unsignedInteger('brand_id')->nullable()->comment('品牌ID 关联brand.id');
            $table->boolean('is_nomal_virtual')->unsigned()->nullable()->default(1)->comment('虚拟正常商品 1=正常 2=虚拟');
            $table->boolean('marketable')->unsigned()->nullable()->default(1)->comment('上架标志 1=上架 2=下架');
            $table->string('jd_skuid', 128)->nullable()->comment('京东的sku ID');
            $table->unsignedInteger('stock')->nullable()->default(0)->comment('库存');
            $table->unsignedInteger('freeze_stock')->nullable()->default(0)->comment('冻结库存');
            $table->decimal('weight', 10)->unsigned()->nullable()->comment('重量');
            $table->string('unit', 20)->nullable()->comment('商品单位');
            $table->longText('intro')->nullable()->comment('商品详情');
            $table->text('spes_desc')->nullable()->comment('商品规格序列号存储');
            $table->text('params')->nullable()->comment('参数序列化');
            $table->unsignedInteger('comments_count')->nullable()->default(0)->comment('评论次数');
            $table->unsignedInteger('view_count')->nullable()->default(0)->comment('浏览次数');
            $table->unsignedInteger('buy_count')->nullable()->default(0)->comment('购买次数');
            $table->unsignedBigInteger('uptime')->nullable()->comment('上架时间');
            $table->unsignedBigInteger('downtime')->nullable()->comment('下架时间');
            $table->unsignedBigInteger('pre_uptime')->default(0)->comment('预备上架时间');
            $table->unsignedBigInteger('pre_downtime')->default(0)->comment('预备下架时间');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->index('sort')->comment('商品排序 越小越靠前');
            $table->boolean('is_recommend')->unsigned()->nullable()->default(2)->index('is_recommend')->comment('是否推荐，1是，2不是推荐');
            $table->boolean('is_hot')->unsigned()->nullable()->default(2)->index('is_hot')->comment('是否热门，1是，2否');
            $table->string('label_ids', 10)->nullable()->comment('标签id逗号分隔');
            $table->text('new_spec')->nullable()->comment('自定义规格名称');
            $table->tinyInteger('is_self')->default(0)->index('uk_is_self')->comment('是否自营0非自营，1自营');
            $table->unsignedInteger('virtual_buy_count')->default(0)->comment('虚拟购买次数');
            $table->unsignedInteger('buy_limit')->default(0)->comment('限购数量');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('删除标志 有数据表示删除');
            $table->integer('supplier_id')->default(0)->comment('供货商id');
            $table->string('commission_detail', 500)->nullable()->default('')->comment('佣金改价json明细，只记录上一次价格');
            $table->integer('commission_time')->nullable()->comment('佣金操作时间');
            $table->unsignedTinyInteger('status')->nullable()->comment('商品状态1,新增审核中，2修改审核中，11新增审核通过，12,修改审核通过');
            $table->string('product_qualification', 500)->nullable()->comment('多个产品资质用逗号分割');
            $table->string('reason', 500)->nullable()->comment('下架理由');
            $table->string('jd_goods_sku', 100)->default('')->comment('京东商品sku');
            $table->integer('supplier_shipper_id')->nullable()->comment('t_supplier_shipper发货信息表id');
            $table->text('table_spec')->nullable()->comment('供应商前端格式字符');
            $table->integer('goods_first_cat_id')->default(0)->comment('一级分类id');
            $table->string('referrer', 55)->nullable()->comment('推荐人名字');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods');
    }
}

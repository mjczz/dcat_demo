<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order', function (Blueprint $table) {
            $table->string('order_id', 64)->primary()->comment('订单号');
            $table->decimal('goods_amount', 10)->unsigned()->nullable()->default(0.00)->comment('商品总价');
            $table->decimal('payed', 10)->unsigned()->nullable()->default(0.00)->comment('已支付的金额');
            $table->decimal('commission', 10)->nullable()->default(0.00)->comment('佣金价');
            $table->decimal('order_amount', 10)->unsigned()->default(0.00)->comment('订单实际销售总额');
            $table->boolean('pay_status')->unsigned()->nullable()->default(1)->comment('支付状态 1=未付款 2=已付款 3=部分付款 4=部分退款 5=已退款');
            $table->boolean('ship_status')->unsigned()->nullable()->default(1)->comment('发货状态 1=未发货 2=部分发货 3=已发货 4=部分退货 5=已退货');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('订单状态 1=正常 2=完成 3=取消');
            $table->unsignedTinyInteger('order_type')->default(1)->comment('订单类型，1是普通订单，2是拼团订单');
            $table->string('payment_code', 20)->nullable()->comment('支付方式代码');
            $table->bigInteger('payment_time')->nullable()->index('idx_payment_time')->comment('支付时间');
            $table->string('logistics_id', 20)->nullable()->comment('配送方式ID 关联ship.id');
            $table->string('logistics_name', 50)->nullable()->comment('配送方式名称');
            $table->decimal('cost_freight', 6)->unsigned()->nullable()->default(0.00)->comment('配送费用');
            $table->unsignedInteger('user_id')->nullable()->index('idx_user_id')->comment('用户ID 关联user.id');
            $table->unsignedInteger('seller_id')->nullable()->comment('店铺ID 关联seller.id');
            $table->boolean('confirm')->unsigned()->nullable()->default(1)->comment('确认收货状态 1=未确认收货 2=已确认收货');
            $table->unsignedBigInteger('confirm_time')->nullable()->comment('确认收货时间');
            $table->unsignedInteger('store_id')->nullable()->default(0)->comment('自提门店ID，0就是不门店自提');
            $table->unsignedInteger('ship_area_id')->nullable()->default(0)->comment('收货地区ID');
            $table->string('ship_address', 200)->nullable()->comment('收货详细地址');
            $table->string('ship_name', 50)->nullable()->comment('收货人姓名');
            $table->char('ship_mobile', 15)->nullable()->comment('收货电话');
            $table->double('weight', 10, 2)->unsigned()->nullable()->default(0.00)->comment('商品总重量');
            $table->boolean('tax_type')->unsigned()->nullable()->default(1)->comment('是否开发票 1=不发票 2=个人发票 3=公司发票');
            $table->string('tax_content')->nullable()->default('商品详情')->comment('发票内容');
            $table->string('tax_code', 50)->nullable()->comment('税号');
            $table->string('tax_title', 50)->nullable()->comment('发票抬头');
            $table->unsignedInteger('point')->nullable()->comment('使用积分');
            $table->decimal('point_money', 10)->nullable()->comment('积分抵扣金额');
            $table->decimal('order_pmt', 10)->unsigned()->nullable()->default(0.00)->comment('订单优惠金额');
            $table->decimal('goods_pmt', 10)->unsigned()->nullable()->default(0.00)->comment('商品优惠金额');
            $table->decimal('coupon_pmt', 10)->unsigned()->nullable()->default(0.00)->comment('优惠券优惠额度');
            $table->string('coupon', 5000)->nullable()->comment('优惠券信息');
            $table->string('promotion_list')->nullable()->comment('优惠信息');
            $table->string('memo')->nullable()->comment('买家备注');
            $table->string('ip', 50)->nullable()->comment('下单IP');
            $table->string('mark', 510)->nullable()->comment('卖家备注');
            $table->unsignedTinyInteger('source')->default(1)->comment('订单来源 1=PC页面 2=H5页面 3=微信小程序');
            $table->boolean('is_self')->nullable()->default(1)->index('idx_is_self')->comment('0蜜仓，1自营, 2京东订单');
            $table->boolean('is_comment')->unsigned()->default(1)->comment('是否评论，1未评论，2已评论');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除标志 有数据表示删除');
            $table->string('jd_order_id', 50)->default('')->comment('京东订单号');
            $table->string('jd_order_submit_res', 500)->default('')->comment('京东创建订单，返回结果');
            $table->string('jd_skuid', 128)->default('')->comment('京东的sku ID');
            $table->decimal('jd_cost_price', 12)->default(0.00)->comment('下单时京东的价格');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_order');
    }
}

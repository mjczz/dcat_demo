<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelSupplierTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_base_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->tinyInteger('enterprise_type')->default(0)->comment('企业性质：1授权经销商 2生产厂家 3贴牌经销商');
            $table->string('business_brand_name', 50)->default('')->comment('经营品牌名称');
            $table->tinyInteger('taxpayer')->default(1)->comment('纳税人资格：1一般纳税人 2小规模纳税人');
            $table->string('enterprise_name', 50)->default('')->comment('企业名称');
            $table->string('legal_person', 50)->default('')->comment('法人代表');
            $table->string('legal_idcard', 50)->default('')->comment('法人身份证号码');
            $table->string('duty_paragraph', 200)->default('')->comment('税号、统一社会信用代码');
            $table->string('organizer_file', 200)->default('')->comment('主办单位证件');
            $table->string('faren_zheng_file', 200)->default('')->comment('企业法人身份证人像面');
            $table->string('faren_fan_file', 200)->default('')->comment('企业法人身份证国徽面');
            $table->string('taxpayer_file', 200)->default('')->comment('一般纳税人资格证明');
            $table->string('faren_shouchi_zheng_file', 200)->default('')->comment('企业法人手持身份证人像面');
            $table->string('faren_shouchi_fan_file', 200)->default('')->comment('企业法人手持身份证国徽面');
            $table->string('bank_kaihu_ming', 200)->default('')->comment('开户名');
            $table->string('bank_kaihu_hang', 200)->default('')->comment('开户行名称');
            $table->string('bank_kaihu_zhanghao', 200)->default('')->comment('开户行账号');
            $table->string('duijie_person', 50)->default('')->comment('对接人');
            $table->string('duijie_person_mobile', 50)->default('')->comment('对接人手机号');
            $table->string('duijie_person_email', 30)->default('')->comment('对接人邮箱');
            $table->string('recommend_person', 50)->default('')->comment('推荐人');
            $table->string('recommend_person_card', 10)->default('')->comment('推荐人身份证号后4位');
            $table->string('recommend_person_mobile', 30)->default('')->comment('推荐人手机号');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_base_info` COMMENT '供货商-基本信息表'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_enterprise_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('production_license', 500)->default('')->comment('生产许可证');
            $table->string('circulation_license', 500)->default('')->comment('流通许可证');
            $table->string('authorization_letter', 500)->default('')->comment('授权书');
            $table->string('license_for_operation', 500)->default('')->comment('经营许可证');
            $table->string('oem_license', 2000)->default('')->comment('贴牌经销商--生产商家资料与经营许可');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_enterprise_info` COMMENT '供货商-企业信息'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_main_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->default(0)->comment("供货商id");
            $table->integer("goods_cate_id")->default(0)->comment("goods_cat id");
            $table->tinyInteger('cate_status')->default('1')->comment('是否启用招商 1启用 2禁用');
            $table->tinyInteger("shenhe_status")->default(1)->comment("审核状态：1审核中 2审核通过 3审核拒绝");
            // 2个更新方式：1入驻时的提审时间 2入驻后自己添加主营类目时的提交审核时间
            $table->integer('submit_shenhe_time')->default(0)->comment("提交审核时间");
            $table->integer('success_shenhe_time')->default(0)->comment("审核通过时间");
            $table->string("refuse_reason")->default('')->comment("审核拒绝理由");
            $table->integer('onsale_goods_num')->default('0')->comment('在架商品数');
            $table->string("shenhe_material", 2000)->default('')->comment("审核材料");
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_main_category` COMMENT '供货商-主营类目表'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->integer("t_brand_id")->comment("关联t_brand id");
            $table->string('name', 50)->default('')->comment('品牌名');
            $table->tinyInteger("brand_is_zhuan")->default(2)->comment("品牌是否是其他公司转让：1是 2否");
            $table->string('trademark_registration', 2000)->default('')->comment('商标注册证明');
            $table->string('trademark_zhuan', 2000)->default('')->comment('商标转让证明');
            $table->string('production_license', 2000)->default('')->comment('生产许可证');
            $table->string('business_license', 2000)->default('')->comment('营业执照');
            $table->string('authorization_letter', 2000)->default('')->comment('授权书');
            $table->string('changjia', 2000)->default('')->comment('生产厂家资料');
            $table->tinyInteger("shenhe_status")->default(1)->comment("审核状态：1审核中 2审核通过 3审核拒绝");
            // 2个更新方式：1入驻时的提审时间 2入驻后自己添加品牌时的提交审核时间,提交审核后，要更新t_brand
            $table->integer('submit_shenhe_time')->default(0)->comment("提交审核时间");
            $table->integer('success_shenhe_time')->default(0)->comment("审核通过时间");
            $table->string("refuse_reason")->default('')->comment("审核拒绝理由");
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_brand` COMMENT '供货商-品牌'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_shipper', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('ship_info', 100)->default('')->comment('发货信息');
            $table->string('counterpart', 50)->default('')->comment('对接人姓名');
            $table->string('mobile', 50)->default('')->comment('对接人号码');
            $table->integer("area_id_1")->default(0)->comment("省id");
            $table->integer("area_id_2")->default(0)->comment("市id");
            $table->integer("area_id_3")->default(0)->comment("区id");
            $table->integer("ship_area_id")->default(0)->comment("发货地区id，有可能是市id有可能是区id");
            $table->string('ship_address', 50)->default('')->comment('发货详细地址');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_shipper` COMMENT '供货商-发货人'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_shenhe_refuse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('err_option', 300)->default('')->comment('拒绝类型 （字段格式前端控制');
            $table->string('err_data', 500)->default('')->comment('拒绝理由(字段格式前端控制)');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_shenhe_refuse` COMMENT '供货商-入驻提交审核的拒绝理由'";
        \Illuminate\Support\Facades\DB::statement($sql);

        Schema::create('t_supplier_contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->default(0)->comment("供货商id");
            $table->string("account_id", 200)->default('')->comment("个人账户id");
            $table->string("per_name", 50)->default('')->comment("个人账号name");
            $table->string("trd_user_id_per", 200)->default('')->comment("创建个人账户的用户唯一标识");
            $table->string("org_account_id", 200)->default('')->comment("企业账户id");
            $table->string("org_name", 100)->default('')->comment("企业账号-org_name");
            $table->string("trd_user_id_org", 200)->default('')->comment("创建企业用户的唯一标识,不能与trd_user_id_per相同");
            $table->tinyInteger("status")->default(1)->comment("合同状态：1未签署 2签署中 3签署成功 4签署失败");
            $table->string("contract_name", 100)->default('')->comment("合同名称");
            $table->string("contract_sign_url", 1000)->default('')->comment("合同签署链接");
            $table->string("flow_id", 200)->default('')->comment("合同流程id");
            $table->string("id_number", 100)->default('')->comment("证件号");
            $table->string("mobile", 50)->default('')->comment("手机号码，手机号为空时无法使用短信意愿认证");
            $table->string("file_id", 100)->default('')->comment("签署流程文件id");
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_contract` COMMENT '供货商-合同'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_base_info');
        Schema::dropIfExists('t_supplier_enterprise_info');
        Schema::dropIfExists('t_supplier_main_category');
        Schema::dropIfExists('t_supplier_brand');
        Schema::dropIfExists('t_supplier_shipper');
        Schema::dropIfExists('t_supplier_shenhe_refuse');
        Schema::dropIfExists('t_supplier_contract');
    }
}

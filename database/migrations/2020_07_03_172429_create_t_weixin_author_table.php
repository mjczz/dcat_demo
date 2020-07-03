<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeixinAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weixin_author', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nick_name')->nullable()->comment('授权方昵称');
            $table->string('head_img')->nullable()->comment('授权方头像');
            $table->string('service_type_info', 10)->nullable()->default('0')->comment('默认为0');
            $table->boolean('verify_type_info')->nullable()->default(-1)->comment('授权方认证类型，-1代表未认证，0代表微信认证');
            $table->string('user_name', 200)->nullable()->comment('小程序的原始ID');
            $table->text('signature')->nullable()->comment('帐号介绍');
            $table->string('principal_name')->nullable()->comment('小程序的主体名称');
            $table->text('business_info')->nullable()->comment('用以了解以下功能的开通状况（0代表未开通，1代表已开通）： open_store:是否开通微信门店功能 open_scan:是否开通微信扫商品功能 open_pay:是否开通微信支付功能 open_card:是否开通微信卡券功能 open_shake:是否开通微信摇一摇功能');
            $table->string('qrcode_url')->nullable()->comment('二维码图片的URL');
            $table->text('authorization_info')->nullable()->comment('授权信息');
            $table->string('appid')->nullable()->comment('授权方appid');
            $table->string('appsecret', 100)->nullable()->comment('授权方AppSecret');
            $table->text('miniprograminfo')->nullable()->comment('可根据这个字段判断是否为小程序类型授权,有值为小程序');
            $table->text('func_info')->nullable()->comment('小程序授权给开发者的权限集列表，ID为17到19时分别代表： 17.帐号管理权限 18.开发管理权限 19.客服消息管理权限 请注意： 1）该字段的返回不会考虑小程序是否具备该权限集的权限（因为可能部分具备）');
            $table->string('authorizer_refresh_token', 200)->nullable()->comment('刷新token');
            $table->string('authorizer_access_token', 200)->nullable()->comment('token');
            $table->boolean('bind_type')->unsigned()->nullable()->default(2)->comment('绑定类型，1为第三方授权绑定，2为自助绑定');
            $table->string('author_type', 10)->nullable()->default('b2c')->comment('授权类型，默认b2c');
            $table->unsignedInteger('expires_in')->nullable()->default(0)->comment('绑定授权到期时间');
            $table->unsignedInteger('ctime')->nullable()->default(0)->comment('小程序授权时间');
            $table->unsignedInteger('utime')->nullable()->default(0)->comment('小程序更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weixin_author');
    }
}

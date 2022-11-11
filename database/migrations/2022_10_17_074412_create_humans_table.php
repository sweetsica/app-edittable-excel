<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();//Nguyễn Văn A
            $table->string('name')->nullable();//Văn A
            $table->string('surName')->nullable();//Nguyễn
            $table->string('phone')->nullable();//Số điện thoại
            $table->string('email')->nullable();//Email cá nhân
            $table->string('dateOfBirth')->nullable();//Ngày sinh
            $table->string('sex')->nullable();//Giới tính
            $table->string('address')->nullable();//Địa chỉ
            $table->string('isUser')->nullable();//Là người dùng
            $table->string('emailAccount')->nullable();//Email tài khoản
            $table->string('statusUser')->default('1');//Trạng thái hoạt động "chờ kích hoạt" - "không hoạt động" - "hoạt động"
            $table->string('statusCompany')->default('0');//Nhân viên công ty? "có" - "không"
            $table->string('code')->nullable();//Mã nhân viên
            $table->string('emailCompany')->nullable();
            $table->string('idDepartment')->nullable();//Đơn vị công tác
            $table->string('idPosition')->nullable();//Vị trí công việc
            $table->string('idTitle')->nullable();//Chức danh
            $table->string('idManager')->nullable();//Người quản lý
            $table->string('joinTestDate')->nullable();//Ngày thử việc
            $table->string('joinDate')->nullable();//Ngày chính thức
            $table->string('statusWork')->nullable();//Trạng thái lao động
            $table->string('leaveDate')->nullable();//Ngày nghỉ việc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humans');
    }
};

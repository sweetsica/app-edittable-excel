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
        Schema::create('customer_d_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang')->nullable();
            $table->string('khach_hang')->nullable();
            $table->string('sdt')->nullable();
            $table->string('nhom_khach_hang')->nullable();
            $table->string('nhan_nhom_khach_hang')->nullable();
            $table->string('kenh')->nullable();
            $table->string('nhan_kenh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('dia_chi_nhan_hang')->nullable();
            $table->string('nguoi_nhan')->nullable();
            $table->string('tinhthanh_pho')->nullable();
            $table->string('quanhuyen')->nullable();
            $table->string('phuongxa')->nullable();
            $table->string('sinh_nhat')->nullable();
            $table->string('tai_khoan_nguoi_dung')->nullable();
            $table->string('khu_vuc')->nullable();
            $table->string('nhan_khu_vuc')->nullable();
            $table->string('loai_khach_hang')->nullable();
            $table->string('nhan_loai_khach_hang')->nullable();
            $table->string('nguoi_lien_he')->nullable();
            $table->string('chuc_vu')->nullable();
            $table->string('email')->nullable();
            $table->string('ma_nhan_vien')->nullable();
            $table->string('ma_giam_sat')->nullable();
            $table->string('ten_giam_sat')->nullable();
            $table->string('source')->nullable();
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
        Schema::dropIfExists('customer_d_m_s');
    }
};

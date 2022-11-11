<?php

namespace App\Imports;

use App\Models\CustomerDMS;
use Request;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomersDMSImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(Request::path()== 'nhap-luu-dms-buon'){
            $row['source'] = 'Khách bán buôn';
        }else{
            $row['source'] = 'Khách bán lẻ';
        }
        return new CustomerDMS([
            'ma_khach_hang'=> $row['ma_khach_hang'],
            'khach_hang'=> $row['khach_hang'],
            'sdt'=> $row['sdt'],
            'nhom_khach_hang'=> $row['nhom_khach_hang'],
            'nhan_nhom_khach_hang'=> $row['nhan_nhom_khach_hang'],
            'kenh'=> $row['kenh'],
            'nhan_kenh'=> $row['nhan_kenh'],
            'dia_chi'=> $row['dia_chi'],
            'dia_chi_nhan_hang'=> $row['dia_chi_nhan_hang'],
            'nguoi_nhan'=> $row['nguoi_nhan'],
            'tinhthanh_pho'=> $row['tinhthanh_pho'],
            'quanhuyen'=> $row['quanhuyen'],
            'phuongxa'=> $row['phuongxa'],
            'sinh_nhat'=> $row['sinh_nhat'],
            'tai_khoan_nguoi_dung'=> $row['tai_khoan_nguoi_dung'],
            'khu_vuc'=> $row['khu_vuc'],
            'nhan_khu_vuc'=> $row['nhan_khu_vuc'],
            'loai_khach_hang'=> $row['loai_khach_hang'],
            'nhan_loai_khach_hang'=> $row['nhan_loai_khach_hang'],
            'nguoi_lien_he'=> $row['nguoi_lien_he'],
            'chuc_vu'=> $row['chuc_vu'],
            'email'=> $row['email'],
            'ma_nhan_vien'=> $row['ma_nhan_vien'],
            'ma_giam_sat'=> $row['ma_giam_sat'],
            'ten_giam_sat'=> $row['ten_giam_sat'],
            'source' => $row['source']
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}

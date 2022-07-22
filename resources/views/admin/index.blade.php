@extends('layouts.menu')
@section('name_page',"สรุปข้อมูลโดยรวม")
@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"
        >แสดงภาพรวมทั้งหมด
    </h6>

    <br> - จำนวนลูกค้าทั้งหมด
    <br> - กราฟแสดงสถานะการผ่อนทั้งหมด ว่า มีอะไรมากน้อยแค่ไหน (กราฟวงกลม)
    <br> - กราฟแสดงจำนวนลูกค้าว่าแต่ละช่วงมีลูกค้าเพิ่มมากน้อยแค่ไหน
    <br> - แสดงรหัสลูกค้า ว่าแต่ละคน ผ่อนเข้ามาได้กี่เปอร์เซ็นต์ กี่บาท สถานะการผ่อน
    <br> - ปฏิทิน

    </div>


@endsection
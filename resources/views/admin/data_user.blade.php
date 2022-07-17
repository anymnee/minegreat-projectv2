@extends('layouts.menu')
@section('name_page', 'ข้อมูลทั่วไป')
@section('button_page')
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_user">
        <i class="fas fa-user-plus fa-sm text-white-50"></i> เพิ่มข้อมูลลูกค้า
    </button>


@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลลูกค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-user">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">รหัสลูกค้า</label>
                            <input type="text" class="form-control" id="number_customers" name="number_customers" aria-describedby="emailHelp"
                                placeholder="รหัสลูกค้า">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อ</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="ชื่อลูกค้า">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">นามสกุล</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="นามสกุลลูกค้า">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">อายุ</label>
                            <input type="text" class="form-control" id="age" name="age" placeholder="อายุลูกค้า">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">เบอร์โทร</label>
                            <input type="text" class="form-control" id="tel" name="tel" placeholder="เบอร์โทรลูกค้า">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">เลขบัตรประชาชน</label>
                            <input type="text" class="form-control" id="cid" name="cid" placeholder="เลขบัตรประชาชนลูกค้า">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อผู้ใช้งาน</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="ตั้งค่าชื่อผู้ใช้งาน">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="cid" name="cid" placeholder="ตั้งค่ารหัสผ่าน">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" id="cid" name="cid" placeholder="ใส่รหัสผ่านอีกครั้ง">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary" onclick="add_user()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>
@endsection

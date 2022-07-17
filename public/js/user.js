function add_user() {
    var number = $(".form-user").find("input[name=number_customers]").val();
    var first_name = $(".form-user").find("input[name=first_name]").val();
    var last_name = $(".form-user").find("input[name=last_name]").val();
    var age = $(".form-user").find("input[name=age]").val();
    var tel = $(".form-user").find("input[name=tel]").val();
    var cid = $(".form-user").find("input[name=cid]").val();
    var username = $(".form-user").find("input[name=username]").val();
    var password = $(".form-user").find("input[name=password]").val();
    var data = {
        number_customer: number,
        first_name: first_name,
        last_name: last_name,
        age: age,
        tel: tel,
        cid: cid,
        username: username,
        password: password

    }
    $.ajax({

        type: "post",
        url: "add_user", 
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: data,
        dataType: "json",
        success: function (response) {
            if (response.success) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'บันทึกข้อมูลสำเร็จ',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {

            }
        }
    });

};
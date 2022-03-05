function check_validation() {
    // lấy tên ra
    var user_name = document.forms["signUp"]['user_name'].value;
    var last_name = document.forms["signUp"]['last_name'].value;
    var first_name = document.forms["signUp"]['first_name'].value;
    var gender = document.forms["signUp"]['gender'].value;
    var birth = document.forms["signUp"]['birth'].value;
    var phone = document.forms["signUp"]['phone'].value;
    var address = document.forms["signUp"]['address'].value;
    var email = document.forms["signUp"]['email'].value;
    var password = document.forms["signUp"]['password'].value;
    var confirm_password = document.forms["signUp"]['confirm_password'].value;

    // điều kiện user_name số ký tự từ 8 đến 20, không sử dụng lặp lại '_' và '.' vd:'__' '..', '_' và '.' không được đứng cạnh nhau vd:'._', '_' và '.' không được đứng ở đầu hoặc cuối, chỉ chứa chữ số '_' và '.'
    let regex_user_name = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
    
    //sđt ng việt nam
    let regex_phone = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
    
    // điều kiện của email phải có '@', '@' không nằm ở đầu, phải có 1 dấu '.', phải có ký tự giữa '@' và '.', phải có ký tự sau '.' cuối cùng, không được có khoảng trắng
    let regex_email = /^(([^<>()\[\]\.,;:\s@\']+(\.[^<>()\[\]\.,;:\s@\']+)*)|(\'.+\'))@(([^<>()[\]\.,;:\s@\']+\.)+[^<>()[\]\.,;:\s@\']{2,})$/i;
    
    // điều kiện của password (không được dưới 8 ký tự, có chữ hoa, có chữ thường, có số và có ký tự đặc biệt)
    let regex_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;


        //validate user_name
        if (user_name == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('user_something_empty').style.display = 'block';
            document.getElementById('user_something_err').style.display = 'none';
            return false;
        } else if(!regex_user_name.test(user_name)) {
            // khi mà nhập sai cách thức
            document.getElementById('user_something_err').style.display = 'block';
            document.getElementById('user_something_empty').style.display = 'none';
            return false;
        } else {
            // nhap dung
            document.getElementById('user_something_err').style.display = 'none';
            document.getElementById('user_something_empty').style.display = 'none';
        }


        // validate họ
        if (last_name == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('lastName_something_empty').style.display = 'block';
            document.getElementById('lastName_something_err').style.display = 'none';
            return false;
        } else {
            // nhap dung
            document.getElementById('lastName_something_err').style.display = 'none';
            document.getElementById('lastName_something_empty').style.display = 'none';
        }


        //validate tên
        if (first_name == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('firstName_something_empty').style.display = 'block';
            document.getElementById('firstName_something_err').style.display = 'none';
            return false;
        } else {
            // nhap dung
            document.getElementById('firstName_something_err').style.display = 'none';
            document.getElementById('firstName_something_empty').style.display = 'none';
        }
    

        //validate ngày sinh
        if(birth == "") {
            document.getElementById('birth_something_empty').style.display = 'block';
            return false;
        } else {
            document.getElementById('birth_something_empty').style.display = 'none';
        }
        

        //validate số điện thoại
        if(phone == "") {
            //
            document.getElementById('phone_something_empty').style.display = 'block';
            document.getElementById('phone_something_err').style.display = 'none';
            return false;
        } else if (!regex_phone.test(phone)) {
            //
            document.getElementById('phone_something_err').style.display = 'block';
            document.getElementById('phone_something_empty').style.display = 'none';
            return false;
        } else {
            document.getElementById('phone_something_err').style.display = 'none';
            document.getElementById('phone_something_empty').style.display = 'none';
        }


        //validate địa chỉ
        if(address == "") {
            document.getElementById('address_something_empty').style.display = 'block';
            return false;
        } else {
            document.getElementById('address_something_empty').style.display = 'none';
        }

    
        // validate email
        if (email == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('email_something_empty').style.display = 'block';
            document.getElementById('email_something_err').style.display = 'none';
            return false;
        } else if(!regex_email.test(email)) {
            //
            document.getElementById('email_something_err').style.display = 'block';
            document.getElementById('email_something_empty').style.display = 'none';
            return false;
        } else {
            document.getElementById('email_something_err').style.display = 'none';
            document.getElementById('email_something_empty').style.display = 'none';
        }


        //validate password
        if (password == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('password_something_empty').style.display = 'block';
            document.getElementById('password_something_err').style.display = 'none';
            return false;
        } else if(!regex_password.test(password)) {
            // khi mà nhập password sai cách thức
            document.getElementById('password_something_err').style.display = 'block';
            document.getElementById('password_something_empty').style.display = 'none';
            return false;
        } else {
            document.getElementById('password_something_err').style.display = 'none';
            document.getElementById('password_something_empty').style.display = 'none';
        }

        //validate confirmpassword
        if (confirm_password == "") {
            // nếu mà không nhập nó sẽ hiển thị ra
            document.getElementById('confirmPassword_something_empty').style.display = 'block';
            document.getElementById('confirmPassword_something_err').style.display = 'none';
            return false;
            } else if (confirm_password == password) {
            document.getElementById('confirmPassword_something_err').style.display = 'none';
            document.getElementById('confirmPassword_something_empty').style.display = 'none';
            } else {
                document.getElementById('confirmPassword_something_err').style.display = 'block';
                document.getElementById('confirmPassword_something_empty').style.display = 'none';
                return false;
            }
}

    // lấy id của first name và last name và chỗ lỗi
    // let regex_last_name = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
    // let regex_first_name = /^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/;
    

    // validate họ
    // if (last_name == "") {
    //     // nếu mà không nhập nó sẽ hiển thị ra
    //     document.getElementById('lastName_something_empty').style.display = 'block';
    //     document.getElementById('lastName_something_err').style.display = 'none';
    // } else if(!regex_last_name.test(last_name)) {
    //     // khi mà nhập sai cách thức
    //     document.getElementById('lastName_something_err').style.display = 'block';
    //     document.getElementById('lastName_something_empty').style.display = 'none';
    // } else {
    //     // nhap dung
    //     document.getElementById('lastName_something_err').style.display = 'none';
    //     document.getElementById('lastName_something_empty').style.display = 'none';
    // }

    //validate tên
    // if (first_name == "") {
    //     // nếu mà không nhập nó sẽ hiển thị ra
    //     document.getElementById('firstName_something_empty').style.display = 'block';
    //     document.getElementById('firstName_something_err').style.display = 'none';
    // } else if(!regex_first_name.test(first_name)) {
    //     // khi mà nhập sai cách thức
    //     document.getElementById('firstName_something_err').style.display = 'block';
    //     document.getElementById('firstName_something_empty').style.display = 'none';
    // } else {
    //     // nhap dung
    //     document.getElementById('firstName_something_err').style.display = 'none';
    //     document.getElementById('firstName_something_empty').style.display = 'none';
    // }

    // //validate giới tính
    // if (gender.selectedIndex < 1) {
    //     // nếu mà không nhập nó sẽ hiển thị ra
    //     document.getElementById('gender_something_empty').style.display = 'none';
    //     return false;
    // } else {
    //     document.getElementById('gender_something_empty').style.display = 'block';
    // }

function check_validation_signin() {
    var user_name_signin = document.forms["signIn"]['user_name'].value;
    var password_signin = document.forms["signIn"]['password'].value;

    //validate username
    if(user_name_signin == "") {
        document.getElementById('user_signin_empty').style.display = 'block';
        return false;
    } else {
        document.getElementById('user_signin_empty').style.display = 'none';
    }

    //validate password
    if(password_signin == "") {
        document.getElementById('password_signin_empty').style.display = 'block';
        return false;
    } else {
        document.getElementById('password_signin_empty').style.display = 'none';
    }
}
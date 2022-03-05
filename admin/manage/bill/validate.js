function check()
{
	let check_error = false;
	let name = document.getElementById('name').value;
	let array_gender = document.getElementsByName('gender');
	let phone = document.getElementById('phone').value;
	let identity = document.getElementById('identity').value;
	let address = document.getElementById('address').value;
	let level = document.getElementById('level').value;
	let wage = document.getElementById('wage').value;
	let account = document.getElementById('account').value;
	let password = document.getElementById('password').value;
	//validate tên
	if(name.length === 0)
	{
		document.getElementById('error_name').innerHTML = 'Tên không được để trống';
		check_error = true;
	}else {
		let regex_name = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
		if (!regex_name.test(name)) {
			document.getElementById('error_name').innerHTML = 'Tên không hợp lệ';
			check_error = true;
		}else {
			document.getElementById('error_name').innerHTML = '';
		}
	}

	//validate giới tính
	check_gender = false;
	for(let i = 0; i<array_gender.length; i++){
		if (array_gender[i].checked) {
			check_gender=true;
		}
	}
	if (!check_gender) {
		document.getElementById('error_gender').innerHTML = 'Giới tính không được để trống';
		check_error =true;
	}else{
		document.getElementById('error_gender').innerHTML = '';
	}

	//validate số điện thoại
	if(phone.length === 0)
	{
		document.getElementById('error_phone').innerHTML = 'Số điện thoại không được để trống';
		check_error = true;
	}else {
		let regex_phone = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
		if (!regex_phone.test(phone)) {
			document.getElementById('error_phone').innerHTML = 'Số điện thoại không hợp lệ';
			check_error = true;
		}else {
			document.getElementById('error_phone').innerHTML = '';
		}
	}

	//validate địa chỉ
	if(address.length === 0)
	{
		document.getElementById('error_address').innerHTML = 'Địa chỉ không được để trống';
		check_error = true;
	}else{
		document.getElementById('error_address').innerHTML = '';
	}


	//validate căn cước công dân
	if(identity.length === 0)
	{
		document.getElementById('error_identity').innerHTML = 'Căn cước không được để trống';
		check_error = true;
	}else{
		if (identity.length  != 12 ) {
			document.getElementById('error_identity').innerHTML = 'Căn 1 cước không hợp lệ (12 số)';
			check_error = true;
		}else{
			document.getElementById('error_identity').innerHTML = '';

		}
	}

	//validate cấp bậc
	if(level.length === 0)
	{
		document.getElementById('error_level').innerHTML = 'Cấp bậc không được để trống';
		check_error = true;
	}else{
		if (level == 1 || level == 2 || level == 3){
			document.getElementById('error_level').innerHTML = '';
				if(level == 1)
	{
		document.getElementById('error_account').innerHTML = '';
	}else if (level == 2) 
	{
		if(account.length === 0)
		{
			document.getElementById('error_account').innerHTML = 'Quản lý cần có tài khoản';
			check_error = true;
		}else {
			document.getElementById('error_account').innerHTML = '';
		}
	}else if (level == 3) {
		if(account.length === 0)
		{
			document.getElementById('error_account').innerHTML = 'Admin cần có tài khoản';
			check_error = true;
		}else {
			document.getElementById('error_account').innerHTML = '';
		}
	}
		}else {
			document.getElementById('error_level').innerHTML = 'Cấp bậc không hợp lệ(1.NV | 2.QL | 3.AD)';
			check_error = true;
		}
	}

	//validate lương
	if(wage.length === 0)
	{
		document.getElementById('error_wage').innerHTML = 'Lương không được để trống';
		check_error = true;
	}else{
		document.getElementById('error_wage').innerHTML = '';
	}
	//validate account
	if(level == 1)
	{
		document.getElementById('error_account').innerHTML = '';
		document.getElementById('error_account').disabled = true;
	}else if (level == 2) 
	{
		if(account.length === 0)
		{
			document.getElementById('error_account').innerHTML = 'Quản lý cần có tài khoản';
			check_error = true;
		}else {
			document.getElementById('error_account').innerHTML = '';
		}
	}else if (level == 3) {
		if(account.length === 0)
		{
			document.getElementById('error_account').innerHTML = 'Admin cần có tài khoản';
			check_error = true;
		}else {
			document.getElementById('error_account').innerHTML = '';
		}
	}

	//validate mật khẩu
	if(level == 1)
	{
		document.getElementById('error_password').innerHTML = '';
		document.getElementById('error_password').disabled = true;
	}else if (level == 2) 
	{
		if(password.length === 0)
		{
			document.getElementById('error_password').innerHTML = 'Quản lý cần có mật khẩu';
			check_error = true;
		}else {
			document.getElementById('error_password').innerHTML = '';
		}
	}else if (level == 3) {
		if(password.length === 0)
		{
			document.getElementById('error_password').innerHTML = 'Admin cần có mật khẩu';
			check_error = true;
		}else {
			document.getElementById('error_password').innerHTML = '';
		}
	}
	
	if (check_error) 
	{
		return false;
	}
}
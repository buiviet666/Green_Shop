function check()
{
	let check_error =false;
	let name = document.getElementById('name').value;
	let image = document.getElementById('image').value;
	let phone = document.getElementById('phone').value;
	let address = document.getElementById('address').value;

	//validate tên
	if(name.length === 0)
	{
		document.getElementById('error_name').innerHTML = 'Tên không được để trống';
		check_error = true;
	}else {
			document.getElementById('error_name').innerHTML = '';
	}

	//validate ảnh nhà sản xuất
	if(image.length === 0)
	{
		document.getElementById('error_image').innerHTML = 'Ảnh nhà sản xuất không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_image').innerHTML = '';
	}

	//validate số điện thoại
	if(phone.length === 0)
	{
		document.getElementById('error_phone').innerHTML = 'Số điện thoại không được để trống';
		check_error = true;
	}else {
		let regex_phone = /^0[1-9][0-9]{8,9}$/;
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

	if (check_error) 
	{
		return false;
	}
}
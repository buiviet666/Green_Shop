function check()
{
	let check_error = false;
	let name = document.getElementById('name').value;
	let description = document.getElementById('description').value;
	let detail = document.getElementById('detail').value;
	let image = document.getElementById('image').value;
	let price = document.getElementById('price').value;
	let vote = document.getElementById('vote').value;

	//validate tên
	if(name.length === 0)
	{
		document.getElementById('error_name').innerHTML = 'Tên sản phẩm không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_name').innerHTML = '';
	}

	//validate mô tả
	if(description.length === 0)
	{
		document.getElementById('error_description').innerHTML = 'Mô tả không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_description').innerHTML = '';
	}

	//validate nội dung
	if(detail.length === 0)
	{
		document.getElementById('error_detail').innerHTML = 'Nội dung không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_detail').innerHTML = '';
	}

	//validate ảnh sản phẩm
	if(image.length === 0)
	{
		document.getElementById('error_image').innerHTML = 'Ảnh sản phẩm không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_image').innerHTML = '';
	}


	//validate giá
	if(price.length === 0)
	{
		document.getElementById('error_price').innerHTML = 'Giá không được để trống';
		check_error = true;
	}else {
		document.getElementById('error_price').innerHTML = '';
	}

	//validate đánh giá
	if(vote.length === 0)
	{
		document.getElementById('error_vote').innerHTML = 'Đánh giá không được để trống';
		check_error = true;
	}else{
		document.getElementById('error_vote').innerHTML = '';
	}
	if (check_error) 
	{
		return false;
	}
}
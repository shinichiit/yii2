$('a.add-cart').click(function(event){
	event.preventDefault();
	var href = $(this).attr('href');
	var name = $(this).data('name');
	$.ajax({
		url: href,
		type: 'GET',
		
		data: {},
		success:function(res){
			if(res=='ok'){
				$('#alert-pro-name').html('san pham <strong>' +name+ '</strong> da them vao gio hang ');
				$('#modal-add-cart').modal('show');
			}else{
				$('#alert-pro-name').html('san pham <strong>' +name+ '</strong> da het hang');
				$('#modal-add-cart').modal('show');
			}

		}
	});
	
	
	// alert(name);
});


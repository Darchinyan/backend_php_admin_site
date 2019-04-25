$(document).ready(function(){
	var id_array = [];
	var table_name = "";
	$('#login').click(function(){
		var user=$('#user').val();
		var pass=$('#pass').val();
		$.ajax({
			type:'post',
			url:'adminError.php',
			data:{username:user,password:pass},
			success:function(x){
				if(x==1){
					window.location.href="http://localhost/vahe_project_tun/admin/admin.php"
				}else if(x==0){
					$('.error').html('Wrong username or password');
				}
			}
		})
	})
	

	$('.delet_class').click(function(){
		id_array = [];
		$('.bg_black').fadeIn(500);
		 window.id = $(this).attr('name');
		 table_name = $(this).attr('value');
		 window.this_img = $(this);
		 id_array.push(id);
		 console.log(id_array);
		  console.log(table_name);
	})
	$('.delete').click(function(){
		id_array = [];
		if($(".checkbox:checked").length == 0){
			alert("Choose checkbox")
		}else{
			$('.bg_black').fadeIn(500);
			table_name = $('.delet_class').attr('value');
			$(".checkbox:checked").each(function(){
			id_array.push($(this).attr('name'));
			});
			console.log(id_array);
			console.log(table_name);
		}
		
	})
	$('.yes_or_no').click(function(){
		if ($(this).text() == 'No'){
			$('.bg_black').fadeOut(500);
			id_array = [];
		}else{
			
			$.ajax({
				type:'post',
				url:'delete.php',
				data:{ajax_id_array:id_array, ajax_table_name:table_name},
				success:function(result){
					if(result == "deleted"){
						$('.bg_black').fadeOut(500, function(){
							if(".checkbox:checked"){
								$('input:checked.checkbox').each(function(){
								$(this).parent().parent().fadeOut(500);
								})
							}else{
								$(this).parent().parent().fadeOut(500);
							};
						});
					}
				}
			})
		}
	})
	
	$(".check_all").click(function(){
		if($(this).prop('checked') == true){
			$('.checkbox').prop('checked',true);
		}else{
			$('.checkbox').prop('checked',false);
		}
	})
	
})
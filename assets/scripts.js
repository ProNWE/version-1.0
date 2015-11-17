$(document).ready( function() {

	function validate_judges() {
		//
	};
	// GET TEAM INFO AJAX 
	var attrId;

	$('#sortable li').on('click', function() {
		attrId = $(this).attr('id');
		var id_ = attrId.split('_');
		var id ;
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
		id = id_[1];

		$('.pronwe_teams').show();
		
		$('#add_team').click( function() {
			$('.pronwe_teams').hide();
		});
		

		$.ajax({ 
			type: "POST",
			url: ur+'/teams/editteam/',
			data: {
				'id': id,
			},
			success: function(result) {
				var t = JSON.parse(result);
			
				$('#t_name').html(t.name);
				$('#t_desc').html(t.description);
				$('#t_count').html(t.count);
				$('#t_cap').html(t.username);
				$('#t_email').html(t.email);
			},
			error: function() {
				$('#t_name').html('');
				$('#t_desc').html('');
				$('#t_count').html('');
				$('#t_cap').html('');
				$('#t_email').html('');
			}
		});
	});

	$('#t_edit').on('click', function() {
		$('#edit_team').modal('show');
		$('#edit_team').modal({
			keyboard: true,
		});

		$('#editable_name').val($('#t_name').html());
		$('#editable_desc').val($('#t_desc').html());

		var id_ = attrId.split('_');
		var id ;
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
		id = id_[1];
		
		$.ajax({
			type: "POST",
			url: ur+'/teams/getparticipants/',
			data: {
				'id':id,
			},
			success: function(result) {
				var rows = JSON.parse(result);

				for(var i = 0; i < rows.length; i++)
				{
					var uploads = 'http://localhost/proNWE/uploads/'
					var li = "<li id='rm_"+rows[i].id+"' class='added'><div class='new_participants'><div id='removable"+rows[i].id+"' class='pull pull-right glyphicon glyphicon-remove rm_participant'></div><img class='default_logo' src='"+uploads+"/unknown.jpg'></div><div class='row'><div class='col-lg-12 zaeb'><form action=''><div class='row'><input type='text' id='p_"+rows[i].id+"' class='form-control input-sm' placeholder='ФИО Участника' value='"+rows[i].id+rows[i].username+"'></div><div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r_"+rows[i].id+"' value='"+rows[i].role+"'></div><div class='row'><input type='text' id='e_"+rows[i].id+"' class='form-control input-sm' placeholder='Email' value='"+rows[i].email+"'></div></form></div></div></li>";
					$('#edit_team li#new_participant').after(li);

					$('#edit_team .rm_participant').on('click', function() {
						var confirmation = confirm("Вы уверены?");
						
						if (!confirmation)
							return false;

						var li = $(this).parents('li').attr('id');

						li = li.split('_');

						$($(this).parents('li')).remove();

						pid = li[1];
						$.ajax({
							type: "POST",
							url: ur+'/teams/deleteparticipants/',
							data: {
								'id':pid,
							},
							success: function(result) {
								//alert(result);
							},
						});
					});
				}

				$('#edit_team input[type=text]').on('change', function(){
					var pId = $(this).attr('id');
					var newvalue = $(this).val();
					pId = pId.split('_');

					pInput = pId[0];
					pId = pId[1];

					$.ajax({
						type: "POST",
						url: ur+'/teams/updateparticipants/',
						data: {
							input: pInput,
							id: pId,
							value: newvalue,
						},
						success: function(result) {
							//alert(result);
						},
					});
				});
			},
		});

		var id = -1;

		$('#edit_team #new_participant').on('click', function() {
			id ++;
			var ur = 'http://localhost/proNWE/uploads/';
			var li = "<li class='added'><div class='new_participants'><div id='removable"+id+"' class='pull pull-right glyphicon glyphicon-remove rm_participant'></div><img class='default_logo' src='"+ur+"unknown.jpg'></div><div class='row'><div class='col-lg-12 zaeb'><form action=''><div class='row'><input type='text' id='p"+id+"' class='form-control input-sm' placeholder='ФИО Участника' ></div><div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r"+id+"'></div><div class='row'><input type='text' id='e"+id+"'class='form-control input-sm' placeholder='Email'></div></form></div></div></li>";
			
			$('#edit_team li#new_participant').after(li);
			
			$('$edit_team #rm_all').on('click', function() {
				//$('#edit_team .added').each( function() {
				//	$(this).remove()
				//});
			alert('asd');
			});
		});
	});

  

  	$('[data-toggle="tooltip"]').tooltip({
  	});
	
// DELETE TEAM 
		$('#t_remove').on('click', function() {
			var id_ = attrId.split('_');
			var id ;
			var ur = location.protocol+'//'+location.hostname+'/proNWE';
			id = id_[1];
			var result = confirm("Вы точно хотите удалить команду?");
			if (!result)
				return false;

			$.ajax({
				type: "POST",
				url: ur+'/teams/delete/',
				data: {
					'id':id,
				},
				success: function(result) {
					$('.pronwe_teams').hide();
					$('#'+attrId).remove();
				}
			});
		});
// ON CHANGE EVENTS 

	$('#editable_name').on('change', function() {
		var id_ = attrId.split('_');
		var id ;
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
		id = id_[1];

		var newname = $(this).val();

		$.ajax({
			type: "POST",
			url: ur+'/teams/setname/',
			data: {
				'id': id,
				'newname': newname,
			},
			success: function(result) {
			},
		});
	});

	$('#editable_desc').on('change', function() {
		var id_ = attrId.split('_');
		var id ;
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
		id = id_[1];

		var newdesc = $(this).val();

		$.ajax({
			type: "POST",
			url: ur+'/teams/setdesc/',
			data: {
				'id': id,
				'newdesc': newdesc,
			},
			success: function(result) {
			},
		});
	});

});
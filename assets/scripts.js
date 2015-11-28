$(document).ready( function() {

	var url = location.protocol+'//'+location.hostname+'/proNWE';
	var uploads = location.protocol+'//'+location.hostname+'/proNWE/uploads';
	
	function validate_judges() {
		//
	};
	// GET TEAM INFO AJAX 
	var attrId;

	$('#sortable li').on('click', function() {
		attrId = $(this).attr('id');
		var id_ = attrId.split('_');
		var id ;
		id = id_[1];

		$('.pronwe_teams').show();
		
		$('#add_team').click( function() {
			$('.pronwe_teams').hide();
		});
		
		$.ajax({ 
			type: "POST",
			url: url+'/teams/editteam/',
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
		id = id_[1];

		$('#edit_team .added').each( function() {
			$(this).remove();
		});

		$.ajax({
			type: "POST",
			url: url+'/teams/getparticipants/',
			data: {
				'id':id,
			},
			success: function(result) {
				var rows = JSON.parse(result);
				for(var i = 0; i < rows.length; i++)
				{
					var li = "<li id='rm_"+rows[i].id+"' class='added'><div class='new_participants'><div id='removable"+rows[i].id+"' class='pull pull-right glyphicon glyphicon-remove rm_participant'></div><img class='default_logo' src='"+uploads+"/unknown.jpg'></div><div class='row'><div class='col-lg-12 zaeb'><form action=''><div class='row'><input type='text' id='p_"+rows[i].id+"' class='form-control input-sm' placeholder='ФИО Участника' value='"+rows[i].username+"'></div><div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r_"+rows[i].id+"' value='"+rows[i].role+"'></div><div class='row'><input type='text' id='e_"+rows[i].id+"' class='form-control input-sm' placeholder='Email' value='"+rows[i].email+"'></div></form></div></div></li>";
					$('#edit_team li#new_participant').after(li);

					$('#edit_team .rm_participant').on('click', function() {
						var confirmation = confirm("Вы уверены?");
						
						if (!confirmation)
							return false;
						else  {
							var li = $(this).parents('li').attr('id');

							li = li.split('_');

							$($(this).parents('li')).remove();

							pid = li[1];
							$.ajax({
								type: "POST",
								url: url+'/teams/deleteparticipants/',
								data: {
									'id':pid,
								},
								success: function(result) {
									//alert(result);
								},
							});
						}
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
						url: url+'/teams/updateparticipants/',
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

		var idn = -1;
		var lastParticipantId;

		$('#edit_team #new_participant').on('click', function() {

			idn ++;
			var id_ = attrId.split('_');
			var id_team = id_[1];
			var li = "<li class='added df'><div class='new_participants'><div id='removable"+idn+"' class='pull pull-right glyphicon glyphicon-remove rm_participant'></div><img class='default_logo' src='"+uploads+"/unknown.jpg'></div><div class='row'><div class='col-lg-12 zaeb'><form action=''><div class='row'><input type='text' id='p__"+idn+"' class='form-control input-sm' placeholder='ФИО Участника' ></div><div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r__"+idn+"'></div><div class='row'><input type='text' id='e__"+idn+"'class='form-control input-sm' placeholder='Email'></div></form></div></div></li>";
			$('#edit_team li#new_participant').after(li);

			$.ajax({
				type: "POST",
				url: url+'/teams/newparticipants/',
				data: {
					'id': id_team,
				},
				success: function(result) {
					lastParticipantId = result;
				},
			});

			$('#edit_team li .rm_participant').on('click', function() {
				
				$.ajax({
					type: "POST",
					url: url+'/teams/delete/',
					data: {
						'id':lastParticipantId,
					},
				});
				$($(this).parents("li")).remove();
			});

			$('#edit_team input[type=text]').on('change', function(){
					var pId = $(this).attr('id');
					var newvalue = $(this).val();
					pId = pId.split('_');

					pInput = pId[0];
					pId = pId[1];

					$.ajax({
						type: "POST",
						url: url+'/teams/updateparticipants/',
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
		});
	});

  

  	$('[data-toggle="tooltip"]').tooltip({
  	});
	
// DELETE TEAM 
		$('#t_remove').on('click', function() {
			var id_ = attrId.split('_');
			var id ;
			id = id_[1];
			var result = confirm("Вы точно хотите удалить команду?");
			if (!result)
				return false;

			$.ajax({
				type: "POST",
				url: url+'/teams/delete/',
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
		id = id_[1];

		var newname = $(this).val();

		$.ajax({
			type: "POST",
			url: url+'/teams/setname/',
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
		id = id_[1];

		var newdesc = $(this).val();

		$.ajax({
			type: "POST",
			url: url+'/teams/setdesc/',
			data: {
				'id': id,
				'newdesc': newdesc,
			},
			success: function(result) {
			},
		});
	});

	$('#edit_ready').on('click', function() {
		
		$('#edit_team').modal('hide');
	});

});

// Judges

$(document).ready( function() {


	$('.judge_button').on('click', function() {
		$('#addjudges').modal('show');
	});
	
	var url = location.protocol+'//'+location.hostname+'/proNWE';
	var lastname = null;
	var name = null;
	var surname = null;
	var phone = null;
	var city = null;
	var email = null;
	var login = null;
	var password = null;
	var id_organization = null;
	var id_event = null ;

	function getJudgesInfo() {
		lastname = $('#addjudges input[name=lastname]').val();
		name = $('#addjudges input[name=name]').val();
		surname = $('#addjudges input[name=surname]').val();
		phone = $('#addjudges input[name=phone]').val();
		city = $('#addjudges input[name=city]').val();
		email = $('#addjudges input[name=email]').val();
		login = $('#addjudges input[name=login]').val();
		password = $('#addjudges input[name=password]').val();
		id_organization = $('#addjudges input[name=id_organization]').val();
		id_event = $('#addjudges input[name=id_event]').val();
	
		var judge = Array();

		judge[0] = {
			lastname: lastname,
			name: name,
			surname: surname,
			phone: phone,
			city: city,
			email: email,
			login: login,
			password: password,
			id_organization: id_organization,
			id_event: id_event,
		}

		return judge[0];
	};	

	$('#addjudge').click( function() {
		var jsondata = JSON.stringify(getJudgesInfo());

		$.ajax({
			type: "POST",
			url: url+'/judge/add/',
			data: {
				data: jsondata,
			},
			success: function(result) {
				$('#addjudges').modal('hide');
				//alert(result);
			},
		});
	});
	
});
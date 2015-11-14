$(document).ready( function() {

	function validate_judges() {
		//
	};

	$('#t_edit').on('click', function() {
		
	});

  	$('[data-toggle="tooltip"]').tooltip({
  	});
	

	$('#sortable li').on('click', function() {
		var attrId = $(this).attr('id');
		var id_ = attrId.split('_');
		var id ;
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
		id = id_[1];

		//alert('here');

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
});
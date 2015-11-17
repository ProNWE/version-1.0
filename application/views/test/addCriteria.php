<div class="container-fluid">
	<div class="pronwe_teams row">
		<ul class="team_info">
			<li>
				<a href="">Название команды: </a>
				<span class="team_context" id="t_name"></span>
				<div class="pull pull-right">
						<span id="t_edit" class="btn-lg glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="left" title="Редактировать"> </span>
						<span id="t_remove" class="btn-lg glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="bottom" title="Удалить"></span>
				</div>
			</li>	
			<li>
				<a href="">Описание команды: </a>
				<span class="team_context" id="t_desc"></span>
			</li>
			<li>
				<a href="">Количество участников: </a>
				<span class="team_context" id="t_count"></span>
			</li>
			<li>
				<a href="">Капитан команды: </a>
				<span class="team_context" id="t_cap"></span>
			</li>
			<li>
				<a href="">Email Капитана:</a>
				<span class="team_context" id="t_email"></span>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="pronwe_title">
			<b>Критерии:</b>
		</div>
	</div>

	<div class="row">
		
	</div>
</div>


<!-- MODAL -->
<div class="modal fade" id="edit_team" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование команды</h4>
      </div>
      <div class="modal-body">
        <form action="" role="form">
        	<div class="form-group">
        		<label for="">Название команды:</label>
        		<input id="editable_name" class="form-control input-sm" type="text" value="">
        	</div>
        	<div class="form-group">
        		<label for="">Описание команды:</label>
        		<input id="editable_desc" class="form-control input-sm" type="text">
        	</div>
        	<hr>
        	<div class="form-group">
        		<label for="">Добавить участников:</label>
        	</div>
        	<div class="row">
        		<ul class="new_participant">
        			<li id="new_participant">
        				<div class="new_participant_button">
        					<i class="fa fa-plus fa-3x"></i>
        				</div>
        			</li>
        			
        		</ul>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="rm_all" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить изменения</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
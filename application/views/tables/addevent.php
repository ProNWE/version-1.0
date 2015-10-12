<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Добавление мероприятия</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Общая информация о мероприятии</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab">Условия соглашения</a></li>
  </ul>

  <!-- Tab panes -->
<form action="<?=URL::site('events/addevent'); ?>" method="post" role="form" enctype="multipart/form-data">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="sth" style="padding: 20px;">sdkjksjfdgkjdfngkjn</div>

    			<button onclick="return false; " class="btn btn-sm btn-info" id="next-1">Дальше</button>
    		</div>
    	</div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile" disabled>
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="sth" style="padding: 20px;">
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" name="eventname" placeholder="Название мероприятия" required>
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" name="city" placeholder="Город проведения" required>
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<select name="level" id="" class="form-control">
				        			<option value="1">Школьное</option>
				        			<option value="2">Университетское</option>
				        			<option value="3">Городское</option>
				        			<option value="4">Региональное</option>
				        			<option value="5">Всероссийское</option>
				        			<option value="6">Международное</option>
				        		</select>
				        	</div>
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" name="start_data" placeholder="Дата проведения" required>
				        	</div>
				        	<div class="row">
				        		<label for="">Логотип мероприятия</label>
				        		<input type="file" name="logo" class="">
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" name="website" placeholder="Сайт мероприятия" required>
				        	</div>
				        	<br>
				        	<div class="row">
				        		<label for="">На начало мероприятия существует ли рейтинг?</label>
				        		<input type="radio" name="start" value="1">Да</radio>
				        		<input type="radio" name="start" value="2" checked>Нет</radio>
				        	</div>

				        <button onclick="return false; " class="pull pull-left btn btn-sm btn-info" id="prev-1">Назад</button>
				        <button onclick="return false; " class="pull pull-right btn btn-sm btn-info" id="next-2">Дальше</button>
    			</div>
    		</div>
    	</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="sth" style="padding: 20px;">
    				Текстовое поле с условиями. Также есть кнопка: скачать в формате pdf
    			</div>
    			<button onclick="return false; " class="pull pull-left btn btn-sm btn-info" id="prev-2">Назад</button>
    			<button type="submit" class="pull pull-right btn btn-sm btn-success" id="ready">Готово!</button>
    		</div>
    	</div>
    </div>
  </div>
</form>
</div>

<script>
	$(document).ready(function() {
		$('#allevents').removeClass('active');
		$('#addevent').addClass('active');


		$('#next-1').click(function(){
			$("#myTab a[href='#profile']").tab('show');
		});

		$('#prev-1').click(function(){
			$("#myTab a[href='#home']").tab('show');
		});

		$('#next-2').on('click', function() {
			$('.sth').find("input[type=text]").each(function()
			{

				$('.sth').find("input[type=text]").on('change', function() {
					var val = $(this).val();
					if (val != '')
						$(this).css('border', '1px solid green');
				});

				var value = $(this).val();

				if (value != '')
				{
					$("#myTab a[href='#settings']").tab('show');
				}
				else
				{
					$('.sth').find('input[type=text]').css('border','1px solid red');
					return false;
				}
			});
			
		});

		$('#prev-2').click(function() {
			$("#myTab a[href='#profile']").tab('show');
		});

		$('#ready').click(function() {
			// AJAX;
		});
	});
</script>
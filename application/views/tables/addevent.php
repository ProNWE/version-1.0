<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Общая информация о мероприятии</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab">Условия пользования сайтом</a></li>
  </ul>

  <!-- Tab panes -->
<form action="<?=URL::site('events/addevent'); ?>" method="post" role="form" enctype="multipart/form-data">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="profile" disabled>
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="sth" style="padding: 20px;">
				    <div class="row">
				        		<input type="text" name="eventname" required>
                    <div class="label-box">
							        <label>Название мероприятия</label>
						         </div>
				        	</div> 	
				    <div class="row">
				        		<input type="text" name="website" required>
                      <div class="label-box">
							          <label>Сайт мероприятия</label>
						          </div>
				        	</div>
            <div class="row">
				        		<input type="text" name="city" required>
                    <div class="label-box">
							        <label>Город проведения</label>
						        </div>
				        	</div>
            <div class="row">
                    <input type="date" name="start_data" class="form-control" required>
                  </div>
				    <div class="row">
                    <input type="file" name="logo" class="logo" required>
                      <div class="label-box1">
                        <label>Логотип мероприятия</label>
                      </div>
				        	</div>
            <br>
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
<<<<<<< HEAD
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" name="website" placeholder="Сайт мероприятия" required>
				        	</div>
				        	<br>
				        	<div class="row">
				        		<label for="">На начало мероприятия существует ли рейтинг?</label>
				        		<input type="radio" name="start" value="1" style="width:12px;">Да</radio>
				        		<input type="radio" name="start" value="2" style="width:12px;" checked>Нет</radio>
				        	</div>

				        <button onclick="return false; " class="pull pull-left btn btn-sm btn-info" id="prev-1">Назад</button>
				        <button onclick="return false; " class="pull pull-right btn btn-sm btn-info" id="next-2">Дальше</button>
=======
            <br>
            <br>
				    <div class="row">
              <div class="label-box1">
                <label for="">На начало мероприятия существует ли рейтинг?</label>
				        <input class="label-box2" type="radio" name="start" value="1">Да</radio><br>
				   		  <input class="label-box2" type="radio" name="start" value="2" checked>Нет</radio>
              </div>
				    </div>
                    
				    <button onclick="return false;" class="pull pull-right btn btn-lg btn-info" id="next-1">Дальше</button>
>>>>>>> 98408f8edbd87fa0d2a12df82797d8d39791b9dd
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
    			<button onclick="return false; " class="pull pull-left btn btn-sm btn-info" id="prev-1">Назад</button>
    			<button type="submit" class="pull pull-right btn btn-sm btn-success" id="ready">Готово!</button>
    		</div>
    	</div>
    </div>
  </div>
</form>
</div>

<script>
	$(document).ready(function() {
		$('#addevent').addClass('active');
    
		$('#next-1').on('click', function() {
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

		$('#prev-1').click(function() {
			$("#myTab a[href='#profile']").tab('show');
		});

		$('#ready').click(function() {
			// AJAX;
		});
	});
</script>

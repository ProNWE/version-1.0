<div class="window">
				<div class="alert table_title"><b>Список мероприятий</b></div>
				<table class="table table-considered allevents">
					<tr>
						<th>#</th>
						<th>Название мероприятия</th>
						<th>Количество участников</th>
						<th>Дата проведения</th>
						<th>Статус</th>
					</tr>
					<? for($i = 0; $i < count($events); $i++) { ?>
						<tr>
							<td><b><?=$i+1; ?></b></td>
							<td><b><a href="<?=URL::site("events/index/".$events[$i]['id']); ?>"><?=$events[$i]['event_name']; ?></a></b></td>
							<td><b>0</b></td>
							<td><b><?=$events[$i]['start_data']; ?></b></td>
							<td><b>Не оплачен</b></td>
						</tr>
					<? } ?>
				</table>
</div>
<script>
	$(document).ready(function() {
		$('#allevents').addClass('active');
	});
</script>
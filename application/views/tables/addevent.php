<script>
	 $(document).ready(function(){
  		//Active classes
  		$('#allevents').removeClass('active');
  		$('#addevent').addClass('active');



	  	$('#wizard').smartWizard();
	      
	    function onFinishCallback(){
	      	$('#wizard').smartWizard('showMessage','Finish Clicked');
	    }     
	});
</script>
<div class="">
	<div id="wizard" class="swMain">
  			<ul>
  				<li>
  					<a href="#step-1">
		                <label class="stepNumber">1</label>
		                <span class="stepDesc">
		                   Шаг 1<br />
		                   <small> Общая информация</small>
		                </span>
		            </a>
		        </li>
  				
  				<li>
		  			<a href="#step-2">
		                <span class="stepDesc" style="color: #000; font-weight: bold;">
		                   <small>Условия пользования данным сайтом</small>
		                </span>
		            </a>
		        </li>  				
  			</ul>

  			<div id="step-1">	
            	<div class="">
			         <div class="alert alert-info">
			         	<b>Общая информация</b>
			         </div>
			         <div class="col-lg-8 col-md-offset-1">
				        <form action="" mathod="post" role="form">
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" placeholder="Название мероприятия">
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" placeholder="Город проведения">
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<select name="" id="" class="form-control">
				        			<option value="">Школьное</option>
				        			<option value="">Университетское</option>
				        			<option value="">Городское</option>
				        			<option value="">Региональное</option>
				        			<option value="">Всероссийское</option>
				        			<option value="">Международное</option>
				        		</select>
				        	</div>
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" placeholder="Дата проведения">
				        	</div>
				        	<div class="row">
				        		<label for="">Логотип мероприятия</label>
				        		<input type="file" class="form-control">
				        	</div> 	
				        	<div class="row">
				        		<label for=""></label>
				        		<input type="text" class="input-sm form-control" placeholder="Сайт мероприятия">
				        	</div>
				        	<br>
				        	<div class="row">
				        		<label for="">На начало мероприятия существует ли рейтинг?</label>
				        		<input type="radio" name="start"></radio>
				        		<input type="radio" name="start"></radio>
				        	</div>
				        </form>
			         </div>
    			</div>
       		</div>
  			
  			<div id="step-2">
           		<h2 class="StepTitle">Step 2 Content</h2>	
            
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
       	     
        	</div>                      
  	</div>
</div>

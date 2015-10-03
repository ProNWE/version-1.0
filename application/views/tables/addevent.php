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
		                <label class="stepNumber">2</label>
		                <span class="stepDesc">
		                   Шаг 2<br />
		                   <small>Шаг второй - Блабла</small>
		                </span>
		            </a>
		        </li>
  				
  				<li>
  					<a href="#step-3">
		                <label class="stepNumber">3</label>
		                <span class="stepDesc">
		                   Шаг 3<br />
		                   <small>Третий шаг - description</small>
		                </span>                   
		            </a>
             	</li>
  				
  			</ul>

  			<div id="step-1">	
            	
		         <div class="alert alert-info">
		         	<b>Общая информация</b>
		         </div>
		         <div class="col-lg-8">
			         <form action="" mathod="post" role="form">
			         	<div class="form-group"><label for=""></label><input type="text" class="form-control input-sm" placeholder="Название мероприятии"></div>
			         	<div class="form-group"><label for=""></label><input type="text" class="form-control input-sm" placeholder="Место проведения"></div>
			         	<div class="form-group"><label for=""></label><input type="text" class="form-control input-sm" placeholder="Дата проведения"></div>
			         	<div class="form-group"><label for=""></label><input type="text" class="form-control input-sm" placeholder="Блаблабла"></div>
			         </form>
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
  			
  			<div id="step-3">
            	<h2 class="StepTitle">Step 3 Content</h2>	
            
	            <p>
	            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>               				          
	        </div>
  	</div>
</div>

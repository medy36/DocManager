div ng-controller="docDetails" ng-app="docManager" class="col-md-9">

    <div class="thumbnail">
      
         
             <div class="caption-full">
            	<h4 class="pull-right">[[ documentt.createdOrigineAt | myfilter:date ]] </h4>
	            <h4><a href="#">[[ documentt.titre ]] </a></h4>
	            
	            <p> [[ documentt.description]] </p>

	            <h4 class="pull-left">  Posted at:[[ documentt.createdAt | myfilter:date ]] </h4>
	           
	        </div>
    </div>
</div>



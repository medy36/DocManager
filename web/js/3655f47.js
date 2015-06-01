jQuery(document).ready(function() {
  $("#single_1").fancybox();	
});

$(document).ready(function(){
     $.fn.datepicker.defaults.language = 'en';
});
/**
*  Module
*
* Description
*/
angular.module('docManager', ['ngRoute']).

    config(function($routeProvider, $interpolateProvider){
	    $interpolateProvider.startSymbol('[[').endSymbol(']]');

	    $routeProvider.
			  when('/docDetails/:docId', {
			    templateUrl: '/view/document/details.html',
			    controller: 'docDetails'
			  }).
			  otherwise({
			    redirectTo: '/new/document'
			  });

	})

	.controller('menuCtrl', ['$scope','$http', function($scope, $http){
			$scope.firstName = "Document Manager - front Agular JS";
			$http.get('#here').
			  success(function(data, status, headers, config) {
			    // this callback will be called asynchronously
			    // when the response is available
			    console.log('success');
			  }).
			  error(function(data, status, headers, config) {
			    console.log('error');
			  });	
	}])

	.controller('docList', ['$scope','$http','$location', function($scope, $http, $location){

		var lists = Routing.generate('api_list');
		
		$http.get(lists).
			  success(function(data, status, headers, config) {
			   			  // console.log(data);
			  $scope.documents = angular.fromJson(data);	  
			  // $scope.path = data.documents["id"];
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log(data);
			    alert(data);
			  });	



		
	}])

	.controller('docDetails', ['$scope','$http','$location','$routeParams', function($scope, $http, $location,$routeParams){

		var slugi = $routeParams.docId;
			detailDocPath = Routing.generate('document_details', { slug: slugi});
			
		$http.get(detailDocPath).
			  success(function(data, status, headers, config) {
			  $scope.documentt = data;	
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log(data);
			    alert('error');
			  });	



		
	}])

	;

	










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



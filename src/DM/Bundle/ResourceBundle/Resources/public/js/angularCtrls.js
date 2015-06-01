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

	.filter('myfilter', function() {
	    return function(input, type) {
	    switch(type) {
	        case 'uppercase':
	          return input.toUpperCase();
	        case 'lowercase':
	          return input.toLowerCase();
	        case 'date':
	          return input.toString('dddd, MMMM ,yyyy');
	        }  
	    };
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
			  $scope.documentt = angular.fromJson(data);

				 
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log(data);
			    alert('error');
			  });	
		
	}])



	;

	










/**
*  Module
*
* Description
*/
angular.module('docManager', []).

	controller('menuCtrl', ['$scope','$http', function($scope, $http){
			$scope.firstName = "Document Manager - front Agular JS";
			$http.get('#here').
			  success(function(data, status, headers, config) {
			    // this callback will be called asynchronously
			    // when the response is available
			    console.log('success');
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log('error');
			  });	
	}])

	.controller('docList', ['$scope','$http', function($scope, $http){

		var lists = Routing.generate('api_list');
		$http.get(lists).
			  success(function(data, status, headers, config) {
			    // this callback will be called asynchronously
			    // when the response is available
			  console.log(data);
			  $scope.documents = angular.fromJson(data);
			   
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log(data);
			  });	



		
	}])

	


	;







'use strict';

angular.module('forumTelecomHaiti', [])

.controller('RegistrationController', ['$scope', '$http', function($scope, $http)
{
	$scope.processRegistrationForm = function()
	{
		$scope.inputFocus = false;
		$scope.formProcessing = true;

		// console.log($scope.user);

		$http.post('/process_registration', $scope.user).success(function(response)
		{
			console.log(response);

			$scope.formProcessing = false;
			$scope.doneProcessing = true;
		});
	}

	$scope.newRegistrationProcess = function()
	{
		$scope.doneProcessing = false;
		$scope.inputFocus = true;
		$scope.user = {};
	}

}])

.controller('ContactController', ['$scope', '$http', function($scope, $http)
{
	$scope.processContactForm = function()
	{
		$scope.inputFocus = false;
		$scope.formProcessing = true;

		// console.log($scope.user);

		$http.post('/process_contact', $scope.contact).success(function(response)
		{
			console.log(response);

			$scope.formProcessing = false;
			$scope.doneContacting = true;
		});
	}

	$scope.newContactProcess = function()
	{
		$scope.doneContacting = false;
		$scope.inputFocus = true;
		$scope.contact = {};
	}

}]);
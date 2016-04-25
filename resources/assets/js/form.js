'use strict';

angular.module('forumTelecomHaiti', [])

.controller('RegistrationController', ['$scope', '$http', function($scope, $http)
{
	$scope.user = {
		typeInscription: 'individuel'
	};

	$scope.processForm = function()
	{
		// console.log($scope.user);

		$http.post('/process', $scope.user).success(function(response)
		{
			console.log(response);
		});
	}

}]);
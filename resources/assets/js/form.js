'use strict';

angular.module('forumTelecomHaiti', [])

.controller('RegistrationController', ['$scope', '$http', function($scope, $http)
{
	$scope.user = {
		typeInscription: 'individuel'
	};
	console.log($scope);
}]);
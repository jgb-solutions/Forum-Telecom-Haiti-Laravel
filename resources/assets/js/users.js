'use strict';

angular.module('forumTelecomHaiti')

.controller('UsersController', ['$scope', '$http', function($scope, $http, $window)
{
	$scope.getUsers = function()
	{
		console.log('clicked');

		$http.get('/users', function(res)
		{
			$scope.users = res.data;

			console.log($scope.users);

			$window.alert(res);
		});
	}

}]);
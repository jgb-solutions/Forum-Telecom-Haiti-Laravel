'use strict';

angular.module('forumTelecomHaiti')

.controller('UsersController', ['$scope', '$http', function($scope, $http, $window)
{
	$scope.hide = true;

	$scope.search = function()
	{
		console.log('searching');

		if ( $scope.name.length > 0 )
		{
			$http.get('/search/' + $scope.name).success(function(res)
			{
				$scope.users = res;
				console.log(res.length);
				$scope.hide = false;
			});
		} else {
			$scope.hide = true;
		}
	}

}]);
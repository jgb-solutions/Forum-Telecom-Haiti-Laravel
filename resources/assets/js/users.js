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
			$scope.loading = true;

			$http.get('/search/' + $scope.name).success(function(res)
			{
				$scope.users = res;
				console.log(res.length);

				$scope.loading = false;
				$scope.hide = false;
			});
		} else {
			$scope.hide = true;
		}
	}

}]);
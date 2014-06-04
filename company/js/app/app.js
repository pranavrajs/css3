var assetApp = angular.module('assetApp', []);

assetApp.config(['$routeProvider',function($routeProvider){
	$routeProvider.
	when('/add-asset',{
		templateUrl:'add-asset.html',
		controller:'AddAssetController'
	}).
	when('/map-asset',{
		templateUrl:'map-asset.html',
		controller:'MapAssetController'
	}).
	when('/movement-history',{
		templateUrl:'movement-history.html',
		controller:'MovementHistoryController'
	}).
	when('/asset-details',{
		templateUrl:'asset-details.html',
		controller:'AssetDetailsController'
	}).
	otherwise({
		redirectTo:'/add-asset'
	});
}]);


assetApp.controller('AddAssetController',function($scope){

});
assetApp.controller('MapAssetController',function($scope){

});
assetApp.controller('MovementHistoryController',function($scope){

});
assetApp.controller('AssetDetailsController',function($scope){

});
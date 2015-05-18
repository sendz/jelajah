/* Initial Data */
  /*
  * Initial Data: Such as config or variables
  */

  var base_url = 'http://localhost/jelajah/';
  var index_page = 'index.php';

/* Controllers */

  /*
  * Controllers: getTrip of User's dashboard
  */

  var getTrip = angular.module('jelajah', []);

  // Trip List of Dashboard
  getTrip.controller('TripListController', function ($scope, $http) {
    $http.get(base_url + index_page + '/api/trip/index/0/5')
         .then(function(res){
           $scope.trips = res.data;
         });
  });

  // Trip detail
  getTrip.controller('TripDetailController', function ($scope, $http) {
    $http.get(base_url + index_page + '/api/trip/detail/' + uniqueID )
         .then(function(res){
           $scope.details = res.data;
         });
  });

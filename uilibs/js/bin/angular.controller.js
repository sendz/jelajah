/* Controllers */

  /*
  * Controller: getTrip of User's dashboard
  */

  var getTrip = angular.module('jelajah', []);

  getTrip.controller('TripListController', function ($scope, $http) {
    $http.get('http://localhost/jelajah/index.php/api/dashboard/index/0/5')
         .then(function(res){
           $scope.trips = res.data;
         });
  });

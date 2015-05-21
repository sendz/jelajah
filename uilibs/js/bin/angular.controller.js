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
  angular.module('jelajah',["typeahead"]);
  var getTrip = angular.module('jelajah', []);
  var typeAhead = angular.module('jelajah', []);

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

  // Search for Airport
  typeAhead.factory('dataFactory', function($http){
      return {
          get: function(url) {
              return $http.get(url)
                          .then(function(resp){
                      return resp.data;
                  });
          }
      };
  });

  typeAhead.controller('TypeAheadController',function($scope,dataFactory){
      dataFactory.get(base_url + index_page + '/api/airport/all')
                 .then(function(data){
              $scope.items = data;
          });
      $scope.name = ''; // This will hold selected item
      $scope.onItemSelected = function() {
          console.log('selected='+$scope.name);
      };
  });

  typeAhead.directive('typeahead',function($timeout){
      return {
            restrict: 'AEC'
          , scope: {
                items: '='
              , prompt: '@'
              , title: '@'
              , subtitle: '@'
              , model: '='
              , onSelect: '&amp;'
          },
          link: function(scope, elem, attrs) {

          },
          templateUrl: 'templates/templateurl.html'
      };
  });

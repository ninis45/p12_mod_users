(function () {
    'use strict';
    
    angular.module('app.user')
    .controller('IndexCtrl',['$scope','$http',IndexCtrl]);
    
    function IndexCtrl($scope,$http)
    {
        $scope.f_group = '';
        $http.post(SITE_URL+'admin/users').then(function(response){
                
                $scope.table = response.data;
        });
        
        $scope.get_table = function()
        {
            $http.post(SITE_URL+'admin/users').then(function(response){
                
                $scope.table = response.data;
            });
        }
        $scope.select_page = function(page)
        {
            //console.log(page);
            
            $http.post(SITE_URL+'admin/users/index/'+page,{f_group:$scope.f_group}).then(function(response){
                
                $scope.table = response.data;
            });
        }
        $scope.$watch('f_group',function(newValue,oldValue){
            
            if(newValue === oldValue)
            {
                return false;
            }
            $http.post(SITE_URL+'admin/users',{f_group:newValue}).then(function(response){
                
                $scope.table = response.data;
            });
        });
    }
    
})();
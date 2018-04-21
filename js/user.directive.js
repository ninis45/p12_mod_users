(function () {
    'use strict';
    
     angular.module('app.user')
     .directive('cbPagination',[cbPagination]);
     
     
     function cbPagination()
     {
         return {
            
            restrict: 'A',
            
            link:function propiedades(scope,element,attr){
                
                
                
                element.bind('click', function(e){
                    
                    
                    
                    console.log(element.attr('href'));
                    e.preventDefault();
                    
                    
                    
                    //$rootScope.$broadcast('preloader:active');
                    //$myModal.open(element.attr('href'),attr.modalTitle,attr.modalController);
                   
                   
                   
                });
                
            }
            
            
        }
     }
     
})();
(function() {
    "use strict";

    angular.module('AngularBlog').controller('DashboardController', DashboardController);
    
    DashboardController.inject = ['$http', '$log'];
    
    function DashboardController($http, $log) {
        var vm = this;
        vm.posts = [];
        vm.clickIndex = '';
        
        $http.get('/posts').then(function(response) {
            $log.info('Ajax success!');
            $log.debug(response.data);
            vm.posts = response.data;
        }, function(response) {
            $log.error('Ajax request failed!');
            $log.debug(response);
        });

        vm.deletePost = function(post) {
            console.log(post);
            var id = post.id;
            $http.delete("/posts/" + id).then(function(response) {
                $log.info("Ajax request deleted record successfully!");
                $log.debug(response);
                vm.posts.remove(post);
            }, function(response) {
                $log.error("Ajax request failed for some reason!");
                $log.debug(response);
            });
        }
        
    }
})();

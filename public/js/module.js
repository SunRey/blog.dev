(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("blogIndex", ['ngMaterial']);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller('IndexController', ['$scope', '$http', '$log', function ($scope, $http, $log) {
        $scope.posts = [];
        $http.get("/posts").then(function(response) {
            $log.info("Ajax success");
            $log.debug(response.data);
            $scope.posts = response.data;
        }, function(response) {
            $log.error("Ajax request failed for some reason!");

            $log.debug(response);
        });

    }]);
})();
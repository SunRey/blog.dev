(function() {
    
    angular.module('AngularBlog').config(configure);
    
    configure.$inject = ['$httpProvider','CSRF_TOKEN'];

    // Configure $http to include both your token and a flag indicating the request is AJAX
    function configure($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }
})();

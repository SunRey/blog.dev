(function() {
    "use strict";
    
    angular.module('AngularBlog').controller('SiteController', SiteController);
    
    SiteController.inject = ['$http'];
    
    function SiteController($http) {
        var vm = this;

        vm.submitContactForm = function() {
            $http.post('http://jonathanreyes.net:1337/emailMe', vm.contactForm)
                .then(function() { vm.emailSent = true; });
        };
    }
})();

(function() {
    "use strict";
    // This should be the actual name of your module
    angular.module('AngularBlog', ['ngMaterial']);

    Array.prototype.remove = function(object) {
        return this.splice(this.indexOf(object), 1);
    };
})();
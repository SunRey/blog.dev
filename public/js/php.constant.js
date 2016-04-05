(function() {
    "use strict";
    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");

    // Set the token as an Angular constant
    app.module('AngularBlog').constant('CSRF_TOKEN', token);
})();


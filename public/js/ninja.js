"use strict";

(function(){

        $(document).ready(function(){
            var konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 66, 65, 13],
                userCode = [];

            function konamiCode () {
                if (konami.length === userCode.length){
                    alert('You have added 30 lives!');
                }
            }

            $(document).keyup(function(event){ 
                userCode.push(event.which); 
                (userCode[userCode.length-1] !== konami[userCode.length-1]) ? userCode = [] : konamiCode();
            })

        });
})();
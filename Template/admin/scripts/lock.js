var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
	            "/Template/admin/img/bg/1.jpg",
//		        "/Template/admin/img/bg/2.jpg",
//		        "/Template/admin/img/bg/3.jpg",
//		        "/Template/admin/img/bg/4.jpg",
//		        "/Template/admin/img/bg/5.jpg",
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();
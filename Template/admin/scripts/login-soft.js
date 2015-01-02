var Login = function () {

	var checkLogin = function(){
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();
		var remember = $("input[name='remember']").val();
        $.ajax({
            type:'post',
            url:'../Admin/checkLogin',
            dataType:"json", 
            data:{
            	'username' : username,
                'password' : password,
                'remember' : remember,
            },
            success:function(data){
                var errcode = data['errcode'];
				if(errcode == 0 ){
					window.location.href="../Index/index"; 
				}else{
					$('.error-account-passwd', $('.login-form')).show();
				}
            }   
        });
	}
	
	
	var handleLogin = function() {
		$('.login-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "请填写账号"
	                },
	                password: {
	                    required: "请填写密码"
	                }
	            },

	            //display error alert on form submit   
	            invalidHandler: function (event, validator) { 
	                $('.no-account-passwd', $('.login-form')).show();
	            },

	            // hightlight error inputs
	            highlight: function (element) { 
	            	// set error class to the control group
	                $(element).closest('.form-group').addClass('has-error'); 
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	            	checkLogin();
	            }
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
//	                    $('.login-form').submit();
	                    checkLogin();
	                }
	                return false;
	            }
	        });
	        
	        $("input[name='remember']").click(function(){
	        	if($(this).is(':checked')) {
	        		$(this).val(1);
	        	}else{
	        		$(this).val(0);
	        	}
	        });
	        
	}

    return {
        //main function to initiate the module
        init: function () {
        	
            handleLogin();
	       
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
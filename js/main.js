$(function(){
	
	$("#username_error_msg").hide();
	$("#password_error_msg").hide();
	$("#password_again_error_msg").hide();
	$("#email_error_msg").hide();
	
	var error_uname = false;
	var error_pass = false;
	var error_cpass = false;
	var error_mail = false;
	
	$("#uname").focusout(function(){
		check_username();
	});
	
	$("#pass").focusout(function(){
		check_pass();
	});
	
	$("#cpass").focusout(function(){
		confirm_pass();
	});
	
	$("#mail").focusout(function(){
		check_email();
	});
	
	function check_username(){
		var uname_length = $("#uname").val().length;
		if(uname_length < 5 || uname_length > 20){
			$("#username_error_msg").html("User Name Should be between 5-20 Characters");
			$("#username_error_msg").show();
			error_uname = true;
		}else{
			$("#username_error_msg").hide();
		}
	}
	
	function check_pass(){
		var pass_length = $("#pass").val().length;
		if(pass_length < 8){
			$("#password_error_msg").html("Password should be min 8 Characters");
			$("#password_error_msg").show();
			error_pass = true;
		}else{
			$("#password_error_msg").hide();
		}
	}
	
	
	function confirm_pass(){
		var pass = $("#pass").val();
		var pass_confirm = $("#cpass").val();
		if(pass != pass_confirm){
			$("#password_again_error_msg").html("Password didn't Match!");
			$("#password_again_error_msg").show();
			error_cpass = true;
		}else{
			$("#password_again_error_msg").hide();
		}
	}
	
	function check_email(){
		var pattern = new RegExp(/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})/i);
		if(pattern.test($("#mail").val())){
			$("#email_error_msg").hide();		
		}else{
			$("#email_error_msg").html("Email Not Valid");
			$("#email_error_msg").show();
			error_mail = true;
			
		}
	}
	
	
	$("#myform").submit(function(){
		var error_uname = false;
		var error_pass = false;
		var error_cpass = false;
		var error_mail = false;
		
		if(error_uname == false && error_uname == false && error_cpass == false && error_email == false){
			return true;
		}else{
			return false;
		}
		
	});
});
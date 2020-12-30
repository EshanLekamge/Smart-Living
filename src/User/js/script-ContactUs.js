

		document.write(Date());
		alert("successfully logged in to the contact form page!");	
	



		function fnValidateData() {
			var v_email="";
			var v_user_proceed=true;
			var v_pass_proceed=true;
			var v_letterValidate=false;
			
			debugger;
			v_email= document.getElementById("var_email").value;
			v_letterValidate = /[a-zA-Z0-9%_+-]+@[a-zA-Z]+\[a-z]{2,3}/.test(v_email);
			
			//email Validation
			if(v_email==""){
				v_user_proceed=false;
				alert("Email Address Required."); 
			}
			else if(v_letterValidate!=true){
				v_user_proceed=false;
				alert("Email Should be in the given format.");
			}
			
			if(v_user_proceed == true && v_pass_proceed == true){
				alert("Successfully submitted.");
			}
			//else{
				//alert("Fill all the details");
			//}
			
	}




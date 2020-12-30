
		function fnValidateData() {
			var v_username="";
			var v_password="";
			var v_user_proceed=true;
			var v_pass_proceed=true;
			var v_letterValidate=false;
			var v_passwordValidate=false;
			debugger;
			v_username = document.getElementById("var_Username").value;
			v_password = document.getElementById("var_id").value;
			v_letterValidate = /^[a-zA-Z]+$/.test(v_username);
			v_passwordValidate = /^[A-Za-z]\w{7,14}$/.test(v_password);
			
			//Username Validation
			if(v_username==""){
				v_user_proceed=false;
				alert("Username Required."); 
			}
			else if(v_letterValidate!=true){
				v_user_proceed=false;
				alert("Username Should Contain only Letters.");
			}
			//Password Validation
			if(v_password==""){
				v_pass_proceed=false;
				alert("Password Required.");
			}
			else if(v_passwordValidate!=true){
				v_pass_proceed=false;
				alert("Password should 7 to 15 characters long which contain only characters, numeric digits, underscore and first character must be a letter");			}
			
			if(v_user_proceed == true && v_pass_proceed == true){
				alert("Successfull.");
			}
			//else{
				//alert("Enter Valid Username & Password");
			//}
			
	}


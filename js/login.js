	var validate = function( event ){      

		var u = $("#username");
		var p = $("#password");

		if(u.val()==""   ){
	        u.css('border-color','red'); //change border color to red  
	      	u.popover('show');
	      	return false; 
		}
		else{
			u.css('border-color','');
	      	u.popover('hide');

			// return true;
		}

		if(p.val().length <7  ){
	        p.css('border-color','red'); //change border color to red   
	      	p.popover('show');
	      	return false; 
		}
		else{
			p.css('border-color','');
			return true;
		}


	}


	$("#adminlogin").click(function(){


		if(validate(this))
		{	
			var inputs='username='+$('#username').val()+					//grab then inputs of your form #loginform
			'&password='+$('#password').val()+'&type=admin';

			console.log(inputs);

			$.ajax ({
			url: "userlogin.php",
			data: inputs,
			method : 'POST',
			success: function() {  alert('success')}	
			})
		}
	});

	$("#studentlogin").click(function(){

		if(validate(this))
		{

			var inputs='username='+$('#username').val()+					//grab then inputs of your form #loginform
			'&password='+$('#password').val()+'&type=student';

			console.log(inputs);

			$.ajax ({
			url: "userlogin.php",
			data: inputs,
			method : 'POST',
			success: function() {  alert('success')}	
			})
		}

	});

	
// // $(document).ready( function()

//  		var validationfunc = function( event ){       
//         var proceed = true;
//         //loop through each field and we simply change border color to red for invalid fields       
//         $("#loginform").each(function(){
//                 $(this).css('border-color','');
//                 if(!$.trim($(this).val())){ //if this field is empty 
//                     $(this).css('border-color','red'); //change border color to red   
//                    proceed = false; //set do not proceed flag
//                 }

//                 //check invalid email
//                 // var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//                 // if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
//                 //     $(this).css('border-color','red'); //change border color to red   
//                 //     proceed = false; //set do not proceed flag            
//                 // }  

//                 //check paswword length
//                 if($(this).attr("type")=="password" && $(this).val().length <7   ))){
//                     $(this).css('border-color','red'); //change border color to red   
//                     proceed = false; 
//         });
       
//         if(proceed){ //if form is valid submit form
//             return true;
//         }
//         // event.preventDefault();
//     }
   
//      //reset previously set border colors and hide all message on .keyup()
//     $("#my_form input[required=true], #my_form textarea[required=true]").keyup(function() {
//         $(this).css('border-color','');
//         $("#result").slideUp();
//     });



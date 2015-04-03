	var validate = function() {

	    var u = $("#username");
	    var p = $("#password");

	    if (u.val() == "") {
	        u.css('border-color', 'red'); //change border color to red  
	        u.popover('show');
	        return false;
	    } else {
	        u.css('border-color', '');
	        u.popover('hide');

	        // return true;
	    }

	    if (p.val().length < 4) {
	        p.css('border-color', 'red'); //change border color to red   
	        p.popover('show');
	        return false;
	    } else {
	        p.css('border-color', '');
	        return true;
	    }
	}

$("#loginform").submit(function(e) {

	    e.preventDefault();

	    if (validate()) {
	        this.submit();
	    }

	});

	// $("#adminlogin").click(function() {


	//     if (validate()) {
	//         var inputs = 'userId=' + $('#username').val() + //grab then inputs of your form #loginform
	//             '&password=' + $('#password').val() + '&utype=admin';

	//         console.log(inputs);

	//         $.ajax({
	//             url: "loginChk.php",
	//             data: inputs,
	//             method: 'POST',
	//             // success: function() {  alert('success')}	
	//         })
	//     }
	// });





	 // var inputs='userId='+$('#username').val()+					//grab then inputs of your form #loginform
	 // 	'&password='+$('#password').val()+'&utype=student';

	 // 	console.log(inputs);

	 // 	$.ajax ({
	 // 	url: "loginChk.php",
	 // 	data: inputs,
	 // 	method : 'POST',
	 // 	// success: function() {  alert('success')}	
	 // 	})
	 // }
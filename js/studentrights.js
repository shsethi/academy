	
$(document).ready(function () {

var userId = $.trim($('#userId').text());

	$('#uname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Name'
		,pk: userId
		,url: 'modify.php'
	});

	$('#gender').editable({
	      type: 'select'
		, title: 'Gender'
		,value : 'M'
		, source: [
			{value: "M", text: 'M'},
			{value: "F", text: 'F'}
		  ]
		,pk: userId
		,url: 'modify.php'
		
	});

	$('#dob').editable({
		type: 'date'
		,title: 'D.O.B'
		,placement:'bottom'
		,pk: userId
		,url: 'modify.php'
	});
	$('#fname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Fathers Name'
		,pk: userId
		,url: 'modify.php'
	});
	$('#mname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Mothers Name'
		,pk: userId
		,url: 'modify.php'
	});
	$('#height').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Height'
		// ,placement:'left'
		,pk: userId
		,url: 'modify.php'
	});
	$('#weight').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Weight'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
	});
	$('#email').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Email'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
	});
	$('#phoneno').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Contact No.'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
	});
	$('#address').editable({
		mode:'inline'
		,type: 'textarea'
		,title: 'Address'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
	});

});

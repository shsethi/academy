	
$(document).ready(function () {

var userId = $.trim($('#userId').text());

	$('#uname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Name'
		,pk: userId
		,url: 'modify.php'
	});

	//'<?php echo $_SESSION["userId"]; ?>'
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
	// $('#center').editable({
	// 	type: 'select'
	// 	,title: 'Center'
	// 	,placement:'left'
	// 	,value:1
		
	// 	,pk: userId
	// 	,url: 'modify.php'
	// 	,source: [
	// 				{value: 01, text: 'Sarabha Nagar'},    //TODO this should be retrieved via ajax
	// 				{value: 02, text: 'Khalsa'},
	// 				{value: 03, text: 'BCM'},
	// 				{value: 04, text: 'Govt. College'},
	// 				{value: 05, text: 'Sports Comple'},
	// 			 ]
	// });


	// $('#sports').editable({
	// 	type: 'select'
	// 	,title: 'Sports'
	// 	,placement:'left'
	// 	,pk: userId
	// 	,url: 'modify.php'
	// 	,value:'06'
	// 	,source: [
	// 			{value: "06", text: 'Tennis'},    //TODO this should be retrieved via ajax
	// 			{value: "01", text: 'Badminton'},
	// 			{value: "02", text: 'Cricket'},
	// 			{value: "03", text: 'Football'},
	// 			{value: "04", text: 'Table Tennis'},
	// 			{value: "05", text: 'Martial Arts'},
	// 			]
	// });
	// $('#traingType').editable({
	// 	type: 'select'
	// 	,title: 'Training Type'
	// 	,placement:'left'
	// 	,value:'Private'
	// 	,pk: userId
	// 	,url: 'modify.php'
	// 	,source: [
	// 				{value: "Private", text: 'Private'},    //TODO this should be retrieved via ajax
	// 				{value: "Semi-Private", text: 'Semi-Private'},
	// 				{value: "Group", text: 'Group'},
	// 			]
	// });



});

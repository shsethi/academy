

$(document).ready(function () {

	$("#student").DataTable(); //initializing Datatable plugin

	$('#uname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Name'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#gender').editable({
	      type: 'select'
		, title: 'Gender'
		,value : 'M'
		, source: [
			{value: "M", text: 'M'},
			{value: "F", text: 'F'}
		  ]
		// ,pk: 1
		// ,url: '/post'
		
	});

	$('#dob').editable({
		type: 'date'
		,title: 'D.O.B'
		,placement:'bottom'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#fname').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Fathers Name'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#height').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Height'
		// ,placement:'left'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#weight').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Weight'
		,placement:'left'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#email').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Email'
		,placement:'left'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#phoneno').editable({
		mode:'inline'
		,type: 'text'
		,title: 'Contact No.'
		,placement:'left'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#address').editable({
		mode:'inline'
		,type: 'textarea'
		,title: 'Address'
		,placement:'left'
		// ,pk: 1
		// ,url: '/post'
	});
	$('#center').editable({
		type: 'select'
		,title: 'Center'
		,placement:'left'
		// ,value:""
		// ,pk: 1
		// ,url: '/post'
		,source: [
					{value: "M", text: 'M'},    //TODO this should be retrieved via ajax
					{value: "F", text: 'F'},
				 ]
	});
	$('#sports').editable({
		type: 'select'
		,title: 'Sports'
		,placement:'left'
		// ,pk: 1
		// ,url: '/post'
		,value:'06'
		,source: [
				{value: "06", text: 'Tennis'},    //TODO this should be retrieved via ajax
				{value: "01", text: 'Badminton'},
				{value: "02", text: 'Cricket'},
				{value: "03", text: 'Football'},
				{value: "04", text: 'Table Tennis'},
				{value: "05", text: 'Martial Arts'},
				]
	});
	$('#traingType').editable({
		type: 'select'
		,title: 'Training Type'
		,placement:'left'
		,value:'Private'
		// ,pk: 1
		// ,url: '/post'
		,source: [
	{value: "Private", text: 'Private'},    //TODO this should be retrieved via ajax
	{value: "Semi-Private", text: 'Semi-Private'},
	{value: "Group", text: 'Group'},
	]
	});



});

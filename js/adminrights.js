	$(document).ready(function () {
	var userId = $.trim($('#userId').text());


	$('#centerId').editable({
		type: 'select'
		,title: 'Center'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
		,source: [
					{value: 01, text: 'Sarabha Nagar'},    //TODO this should be retrieved via ajax
					{value: 02, text: 'Khalsa'},
					{value: 03, text: 'BCM'},
					{value: 04, text: 'Govt. College'},
					{value: 05, text: 'Sports Complex'},
				 ]
	});


	$('#sportsId').editable({
		type: 'select'
		,title: 'Sports'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
		,source: [
				{value: "06", text: 'Tennis'},    //TODO this should be retrieved via ajax
				{value: "01", text: 'Badminton'},
				{value: "02", text: 'Cricket'},
				{value: "03", text: 'Football'},
				{value: "04", text: 'Table Tennis'},
				{value: "05", text: 'Martial Arts'},
				]
	});
	$('#trainingType').editable({
		type: 'select'
		,title: 'Training Type'
		,placement:'left'
		,pk: userId
		,url: 'modify.php'
		,source: [
					{value: "Private", text: 'Private'},    //TODO this should be retrieved via ajax
					{value: "Semi-Private", text: 'Semi-Private'},
					{value: "Group", text: 'Group'},
				]
	});





});

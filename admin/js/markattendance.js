$("#form2").submit(function(e) {

	    e.preventDefault();
	    
	    var data_date = $("#datepicker").val();

	    $theForm = $(this);
	    // send xhr request
	    $.ajax({
         type: $theForm.attr('method'),
         url: $theForm.attr('action'),
         data: $theForm.serialize()+"&date="+data_date,
         success: function(data) {
         	console.log(data)
         	if(data=="success")
         	{
             	// alert('Attendance marked for '+data_date);
             	$(".alert").removeClass('alert-danger').addClass('alert-success').append("<strong>Success!</strong> "+'Attendance marked for '+data_date).show();
         		
         	}
             else
             {

             	// alert("error "+data);
             	$(".alert").removeClass('alert-success').addClass('alert-danger').append("<strong>Error!</strong> " +data).show();
             }

            //updating tables to represent new data
            // $("#form1").submit(); 
         }
     });

     // prevent submitting again
     return false;

	});
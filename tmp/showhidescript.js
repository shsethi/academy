 script

 //$("trainingGroup").change(radioValueChanged('trainingGroup'));
 $("input[name='trainingGroup']").change(radioValueChanged);
 function radioValueChanged()
        {

            radioValue = $(this).val();
            if($(this).is(":checked") && radioValue == "Private")
            {
                $( "#tg1" ).show();
                $( "#tg2" ).hide();
            }
            else
            {
                $( "#tg1" ).hide();
           		$( "#tg2" ).show();
            }
        } 
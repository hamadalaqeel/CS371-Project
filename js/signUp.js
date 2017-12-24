 function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
      }

$(document).ready(function () {
    $flag = 1;

     $("#email").focusout(function () {
        if ($(this).val() === '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_email").css("color", "red");

              if( !validateEmail($(this).val())) { 
                   $("#error_email").text("* You have to enter a real email!");
                                      $("#error_email").css("color", "red");

        }else{

            $("#error_email").text("* You have to enter your email!");}
                                      $("#error_email").css("color", "red");

        } else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_email").text("");

        }
        
    }
      );
   
      
     $("#password").focusout(function () {
        if ($(this).val() === '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_password").text("* You have to enter your password!");
        } else if($(this).val().length < 10){
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_password").text("* Password must have 10 index or higher!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_password").text("");

        }
    });
    $("#myName").focusout(function () {
        if ($(this).val() === '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_name").text("* You have to enter your first name!");
        } else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_name").text("");

        }
    });
    $("#lastname").focusout(function () {
        if ($(this).val() === '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_lastname").text("* You have to enter your Last name!");
        } else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_lastname").text("");
        }
    });
    $("#role").focusout(function () {
        if ($(this).val() == 0) {
            $(this).css("border-bottom", "2px solid #FF0000");
            $('#submit').attr('disabled', true);
            $("#error_role").text("* You have to enter your role!");
        } else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_role").text("");
        }
    });
    $("#dob").focusout(function () {
        if ($(this).val() === '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_dob").text("* You have to enter your Date of Birth!");
        } else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_dob").text("");
        }
    });


    $("#phone").focusout(function () {
        $pho = $("#phone").val();
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* You have to enter your Phone Number!");
        } else if ($pho.length != 10)
        {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* Length of Phone Number Should Be Ten");
        } else {
            $(this).css({"border-color": "#2eb82e"});
            $('#submit').attr('disabled', false);
            $("#error_phone").text("");
        }

    });

    $("#submit").click(function () {
        if ($("#email").val() == '')
        {
            $("#email").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_email").text("* You have to enter your email!");
        }
        if ($("#password").val() == '')
        {
            $("#password").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_password").text("* You have to enter a password!");
        }
        if ($("#myName").val() == '')
        {
            $("#myName").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_name").text("* You have to enter your first name!");
        }
        if ($("#lastname").val() == '')
        {
            $("#lastname").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_lastname").text("* You have to enter your Last name!");
        }
        if ($("#role").val() == 0)
        {
            $("#role").css("border-bottom", "2px solid #FF0000");
            $('#submit').attr('disabled', true);
            $("#error_role").text("* You have to enter your role!");
        }

        if ($("#dob").val() == '')
        {
            $("#dob").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_dob").text("* You have to enter your Date of Birth!");
        }
        if ($("#age").val() == '')
        {
            $("#age").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_age").text("* You have to enter your Age!");
        }
        if ($("#phone").val() == '')
        {
            $("#phone").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* You have to enter your Phone Number!");
        }
    });
    
});

	
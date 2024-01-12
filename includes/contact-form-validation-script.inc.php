<script>
    // Modal Quick Enquery Form Validation Script
  $("#contactForm").submit(function () {
        if (validatecontactForm()) {
            return true;
        }
        else {
            return false;
        }
    }); 
    function validatecontactForm() {
        var valid = true;
        $(".form-control").css('border-color', '');
        $(".error").html('');

        // User name validation
        if (!$("#name").val()) {
            $("#name_error").html("Name is required");
            $("#name").css('border-color', '#dc3545');
            valid = false;
        } else {
            $("#name_error").html("");
            $("#name").css('border-color', '#099f1a');
        }

        //  
        if (!$("#email").val()) {
            $("#email_error").html("Email is required");
            $("#email").css('border-color', '#dc3545');
            valid = false;
        } else if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email_error").html("Invalid email");
            $("#email").css('border-color', '#dc3545');
            valid = false;
        } else {
            $("#email_error").html("");
            $("#email").css('border-color', '#099f1a');
        } 

        //  
        var phno = $.trim($('#phone').val());
        var che_phno = /^[0-9]{7,15}$/;
        if (!$("#phone").val()) {
            $("#phone_error").html("Phone number required");
            $("#phone").css('border-color', '#dc3545');
            valid = false;
        } if (!che_phno.test(phno)) {
            $("#phone").css('border-color', '#dc3545');
            $("#phone_error").html('Please enter valid phone no');
            valid = false;
        } else if (phno.length < 7 || phno.length > 15) {
            $("#phone").css('border-color', '#dc3545');
            $("#phone_error").html('Phone no. must be greater than or equals to 7 and less than or equals to 15 digits!!');
            // $("#dash_phone_error").css("color", "#FC0000"); 
            valid = false;
        } else {
            $("#phone_error").html("");
            $("#phone").css('border-color', '#099f1a');
        } 

        if (!$("#service").val()) {
        $("#service_error").html("Service is required");
        $("#service").css('border-color', '#dc3545');
            valid = false;
        } else {
            $("#service_error").html("");
            $("#service").css('border-color', '#099f1a');
        } 

        return valid;
    }
</script>
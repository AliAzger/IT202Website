/*
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                */
               
$(document).ready((event) => {
    $("#add_bread").submit(function(event) {

        let isValid = true;

        const breadCode = $("#breadCode").val();
        if (!(breadCode.length >= 4 && breadCode.length <= 6)) {
            $("#breadCodeError").text("Must be between 4 and 6 characters");
            isValid = false;
        } else {
            $("#breadCodeError").text("");
        }

        const breadName = $("#breadName").val();
        if (!(breadName.length >= 10 && breadName.length <= 100)) {
            $("#breadNameError").text("Must be between 10 and 100 characters");
            isValid = false;
        } else {
            $("#breadNameError").text("");
        }

        const description = $("#description").val();
        if (!(description.length >= 10 && description.length <= 225)) {
            $("#descriptionError").text("Must be between 10 and 225 characters");
            isValid = false;
        } else {
            $("#descriptionError").text("");
        }

        const price = $("#price").val();
        if (!(parseFloat(price) >= 1 && parseFloat(price) <= 100000)) {
            $("#priceError").text("Must be between 1 and 100000 dollars");
            isValid = false;
        } else {
            $("#priceError").text("");
        }
        
        if (!isValid) {
            event.preventDefault();
        }

        $("#reset_button").click( () => {
           
        });


    });
});

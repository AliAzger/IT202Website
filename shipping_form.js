/*
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                */
$(document).ready(() => {
    $("form").submit(function(event) {
        let isValid = true;


        const firstname = $("#firstname").val();
        const lettersOnlyRegex = /^[A-Za-z]+$/;

        if (!(firstname.length >= 1 && lettersOnlyRegex.test(firstname))) {
            $("#firstnameError").text("Must be 1 or more letters");
            isValid = false;
        } else {
            $("#firstnameError").text("");
        }

        const lastname = $("#lastname").val();
        if (!(lastname.length >= 1 && lettersOnlyRegex.test(lastname))) {
            $("#lastnameError").text("Must be 1 or more letters");
            isValid = false;
        } else {
            $("#lastnameError").text("");
        }

        const address = $("#address").val();
        if (!(address.length >= 10 && address.length <= 225)) {
            $("#addressError").text("Must be between 10 and 225 letters");
            isValid = false;
        } else {
            $("#addressError").text("");
        }

        const city = $("#city").val();
        if (!(city.length >= 1 && lettersOnlyRegex.test(city))) {
            $("#cityError").text("Must be 1 or more letters");
            isValid = false;
        } else {
            $("#cityError").text("");
        }

        const state = $("#state").val();
        if (!(state.length >= 2 && lettersOnlyRegex.test(state))) {
            $("#stateError").text("Must be 2 or more letters");
            isValid = false;
        } else {
            $("#stateError").text("");
        }

        const zip = $("#zip").val();
        const zipRegex = /^\d{5}$/;
        if (!zipRegex.test(zip)) {
            $("#zipError").text("Must be a 5-digit number");
            isValid = false;
        } else {
            $("#zipError").text("");
        }

        const d1 = $("#d1").val();
        if (!(d1 >= 0 && d1 <= 36)) {
            $("#d1Error").text("Must be between 0 and 36 inches");
            isValid = false;
        } else {
            $("#d1Error").text("");
        }

        const ordernumber = $("#ordernumber").val();
        const orderNumberRegex = /^[a-zA-Z0-9]+$/;
        if (!orderNumberRegex.test(ordernumber)) {
            $("#ordernumberError").text("Must be alphanumeric");
            isValid = false;
        } else {
            $("#ordernumberError").text("");
        }


        if (!isValid) {
            event.preventDefault();
        }
    });
});

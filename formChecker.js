function validateForm(){

    //Stack(list) to hold errors.
    var error = []

    //Get elements from the form
    var num_inputs = document.querySelectorAll("input[type=number]")
    var pass_inputs = document.querySelectorAll("input[type=password]")
    var email_inputs = document.querySelectorAll("input[type=email]")

    //Check for errors in quantities
    for (i in num_inputs){
        if(Number(num_inputs[i].value) < 0){
            error.push("You have entered a quantity that isn't a number greater than or equal to zero. \n")
        }
    }

    //Check for errors in passwords
    for (i in pass_inputs){
        if(pass_inputs[i].value == ""){
            error.push("Password field cannot be empty.\n")
        }
    }

    //Validate emails, Note regex used here is very simple and just checks for string@string.string
    email_inputs.forEach(function(i){
        var regex = /\S+@\S+\.\S+/;
        if(!(regex.test(i.value))){
            error.push("An email address entered is not valid.\n")
        }
    })

    //Show user's the errors
    if(error.length > 0){
        error_string = ""
        for(e in error){
            error_string = error_string + error[e];
        }
        alert(error_string)
        return false
    }

    return true
}
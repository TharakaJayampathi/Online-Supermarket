// JavaScript source code for Credit Card Payment

function invoice(form)
{    
    
    var errors = [];

    if(form.firstName.value == "")
    {
        errors.push("Please enter the first name!");
    }

    if(form.lastName.value == "")
    {
        errors.push("Please enter the last name!");
    }

    if(form.cardNumber.value == "")
    {
        errors.push("Please enter the card number!");
    }

    if(form.cvv.value == "")
    {
        errors.push("Please enter the CVV number!");
    }

    if (form.Month.value == "")
    {
        errors.push("Please enter the expiry month of the card!");
    }

    if (form.Year.value == "")
    {
        errors.push("Please enter the expiry year of the card!");
    }

    var alphabeticExpression = /^[A-Za-z]+$/;

    if (form.firstName.value != "" && !firstName.value.match(alphabeticExpression))
    {
        errors.push("Please use letters only for your first name!");
    }

    if (form.lastName.value != "" && !lastName.value.match(alphabeticExpression))
    {
        errors.push("Please use letters only for your last name!");
    }

    var numericExpression = /^[0-9]+$/;

    if (form.cardNumber.value != "" && !cardNumber.value.match(numericExpression))
    {
        errors.push("Please use numbers only for your card number!");
    }

    if (form.cvv.value != "" && !cvv.value.match(numericExpression))
    {
        errors.push("Please use numbers only for the CVV number!");
    }
   
    if (errors.length > 0)
    {
        var message = "ERRORS: \n\n";

        for (var i = 0; i < errors.length; i++)
        {
            message += errors[i] + "\n";
        }

        alert(message);

        return false;
    }

    return true;
}




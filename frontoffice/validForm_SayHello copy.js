function validateForm(theForm)
{
        if (!validRequired(theForm.first_name,"First Name"))
                return false;

        if (!validRequired(theForm.last_name,"Last Name"))
                return false;

        return true;
}

function validRequired(formField,fieldLabel)
{
        var result = true;

        if (formField.value == "")
        {
                alert('Please enter a value for the ' + fieldLabel + '.');
                formField.focus();
                result = false;
        }

        return result;
}


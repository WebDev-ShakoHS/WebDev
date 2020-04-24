function GetUrlValue(VarSearch) {
    var SearchString = window.location.search.substring(1);
    var VariableArray = SearchString.split('&');
    for (var i = 0; i < VariableArray.length; i++) {
        var KeyValuePair = VariableArray[i].split('=');
        if (KeyValuePair[0] == VarSearch) {
            return KeyValuePair[1];
        }
    }
}

function yourFunction() {
    var action_src = "#" + document.getElementsByName("name")[0].value;
    var your_form = document.getElementById('your_form');
    your_form.action = action_src;
}
function validateForm() {
    var x = document.forms["your_form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
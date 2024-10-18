// xxxxxxxxxxxx validation codes  xxxxxxxxxxxxx
function email_validate() {

    var email = document.getElementById("email").value.toString();
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    // alert(email);
    if (email.length == 0) {
        document.getElementById("email_val").innerHTML = "** please fill the E-mail ID....";
    } else if (reg.test(email) == false) {
        document.getElementById("email_val").innerHTML = "Invalid Email Address";
        return false;
    } else {
        document.getElementById("email_val").style.display = "none";
    }
    return true;
}
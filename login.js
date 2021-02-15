function validationFrom(){
    var username = document.getElementById("username").Value;
    var password = document.getElementById("password").Value;

    if (username == "" && password == "")
    {
        alert ("Username Dan Password Kosong!!")
        return false;
    }
    else if (username == "")
    {
        alert ("Username Anda Masih Kosong!!")
        return false;
    }
    else if (password == "")
    {
        alert ("Password Anda Masih Kosong!!")
        return false;
    }
}
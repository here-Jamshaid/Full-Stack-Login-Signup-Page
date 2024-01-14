function visibility()
{
   var password = document.getElementById('password');   //get password element
    var icon = document.getElementById('eye');           // get icon element

if (password.type == 'password')       
{
password.type = 'text';
icon.classList.remove('fa-eye');
icon.classList.add('fa-eye-slash');
} else {
password.type = 'password';
icon.classList.remove('fa-eye-slash');
icon.classList.add('fa-eye');
}
}
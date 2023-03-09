// On crée des variables qui correspondent aux champs récupérés du fichier HTML

    var firstnameError = document.getElementById('firstname-error');
    var lastnameError = document.getElementById('lastname-error');
    var emailError = document.getElementById('email-error');
    var passwordError = document.getElementById('password-error');
    var confirmed_password = document.getElementById('confirmed_password-error');
    var submitError = document.getElementById('submit-error');

function validateLastname() {
    var lastname = document.getElementById('lastname').value;

    if(lastname.lenght == 0){
        lastnameError.innerHTML = 'Le nom de famille doit être renseigné';
        return false;
    }
};

    
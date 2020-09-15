var state = false;
function toggle() {
    if (state) {
        document.getElementById("inputPassword").setAttribute("type", "password");
        document.getElementById("eye").style.color = '#7a797e';
        state = false;
    }
    else {
        document.getElementById("inputPassword").setAttribute("type", "text");
        document.getElementById("eye").style.color = '#5887ef';
        state = true;
    }
}

function toggler() {
    if (state) {
        document.getElementById("registration_form_plainPassword").setAttribute("type", "password");
        document.getElementById("eye").style.color = '#7a797e';
        state = false;
    }
    else {
        document.getElementById("registration_form_plainPassword").setAttribute("type", "text");
        document.getElementById("eye").style.color = '#5887ef';
        state = true;
    }
}
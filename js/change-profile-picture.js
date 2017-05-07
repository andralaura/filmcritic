var base_url = window.location.origin;

function changeProfilePicture(name) {
    if (name == "siim") {
        if (document.getElementById(name).src == base_url + "/images/profile.jpg") {
            document.getElementById(name).src = "/images/siim.jpg";
        } else {
            document.getElementById(name).src = "/images/profile.jpg";
        }
    } else if (name == "andra") {
        if (document.getElementById(name).src == base_url + "/images/profile.jpg") {
            document.getElementById(name).src = "/images/andra.jpg";
        } else {
            document.getElementById(name).src = "/images/profile.jpg";
        }
    } else if (name == "kalle") {
        if (document.getElementById(name).src == base_url + "/images/profile.jpg") {
            document.getElementById(name).src = "/images/kalle.jpg";
        } else {
            document.getElementById(name).src = "/images/profile.jpg";
        }
    }
}
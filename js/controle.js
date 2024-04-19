function evaluationvalid() {
    var title = document.getElementById("ti6
treEva").value;
    var duree = document.getElementById("duree").value;
    var description = document.getElementById("descE").value;

    var error = false;

    if (title.trim() === "") {
        document.getElementById("error-titreEva").innerText = "Veuillez saisir le titre.";
        error = true;
    } else {
        document.getElementById("error-titreEva").innerText = "";
    }

    if (title.trim().length < 10 && !error) {
        document.getElementById("error-titreEva").innerText = "Le titre doit contenir au moins 10 caractères.";
        error = true;
    }

    if (duree.trim() === "") {
        document.getElementById("error-duree").innerText = "Veuillez saisir une durée.";
        error = true;
    } else {
        document.getElementById("error-duree").innerText = "";
    }

    if (description.trim() === "") {
        document.getElementById("error-descE").innerText = "Veuillez saisir une description.";
        error = true;
    } else {
        document.getElementById("error-descE").innerText = "";
    }

    if (description.trim().length < 5 && !error) {
        document.getElementById("error-descE").innerText = "La description doit contenir au moins 5 caractères.";
        error = true;
    }

    return !error;
}

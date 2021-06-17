
//ajout film

var type = document.getElementById("type1");
var genre = document.getElementById("genre1");
var nbCopie = document.getElementById("nbCopie");
var filmName = document.getElementById("nomFilm1");
var btnValider = document.getElementById("btn-valider1");
var posterFilm = document.getElementById("js___posterFilm");
var btnEnvoyer = document.getElementById("btn-envoyer1");
var form = document.getElementById("main09");
var idSelection = document.getElementById("id-selection");
var titreSelection = document.getElementById("titre-selection");
var typeSelection = document.getElementById("type-selection");
var genreSelection = document.getElementById("genre-selection");
var nbpossedeSelection = document.getElementById("nbpossede-selection");
var idPosterSelection = document.getElementById("idPoster-selection");

type.addEventListener("change",ajoutListeGenre);
btnValider.addEventListener("click",getInfoFilm);
btnEnvoyer.addEventListener("click",sendData);

function reorganizationDate(dateENG){
    if (dateENG != undefined){
        let yearTemp = dateENG.split("-")[0];
        let monthTemp = dateENG.split("-")[1];
        let dayTemp = dateENG.split("-")[2];
        let dateFRA = dayTemp +"-"+ monthTemp +"-"+ yearTemp;
        return dateFRA
    }else {
        return
    }
}

function ajoutListeGenre(){

    let optionGenreOld = document.getElementsByClassName("optionGenre");
    if (optionGenreOld.length>0){
        for (i = optionGenreOld.length-1; i >= 0; i--) {
            genre.removeChild(optionGenreOld[i]);
        }
    }

    let value = type.value;
    if (value == "film" || value == "serie"){
        let option = document.createElement("option");
        option.classList.add("optionGenre");
        option.textContent = "Choisissez une option";
        option.value="";
        genre.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionGenre");
        option1.textContent = "Action/aventure";
        option1.value="act";
        genre.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionGenre");
        option2.textContent = "Comedie/comique";
        option2.value="com";
        genre.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionGenre");
        option3.textContent = "Animation/famillial";
        option3.value="fam";
        genre.appendChild(option3);

    }
    else{
        alert("Erreur Saisie");
    }
}

function getInfoFilm(){
    if (type.value == ""){
        alert("Veuillez choisir un type de media s'il vous plait")
        return

    }else if (genre.value == ""){
        alert("Veuillez choisir un genre de media s'il vous plait")
        return

    }else if (nbCopie.value == ""){
        alert("Veuillez entrée le nombre de media s'il vous plait")
        return

    }else if (filmName.value == ""){
        alert("Veuillez définir un titre de media s'il vous plait")
        return

    }

    let invisibilityOld = document.getElementsByClassName("invisibility");
    if (invisibilityOld.length<1){
        btnEnvoyer.classList.add("invisibility")
    }

    let afficheOld = document.getElementsByClassName("container_selection");
    if (afficheOld.length>0){
        for (x = afficheOld.length-1; x >= 0; x--) {
            posterFilm.removeChild(afficheOld[x]);
        }
    }
    let filmNameRecup = filmName.value;
    let xhr = new XMLHttpRequest();
    let api1 = "https://api.themoviedb.org/3/search/multi?api_key=369494a80cb8a4b4357c06142e1b61cf&language=fr-FR&query="+filmNameRecup;
    xhr.open("GET", api1, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJson=JSON.parse(xhr.responseText);
            let tabRecup = donneJson.results;
            selectionFilmPoster(tabRecup);
            let container = document.getElementsByClassName("container_selection");
            for (j = 0; j < container.length; j++){
                container[j].addEventListener("click", selectionMedia)
            }
        }
    }
}

function selectionFilmPoster (recupdonnee){
    for (i = 0; i < recupdonnee.length; i++) {
        let titleTemp = recupdonnee[i].title;
        if (titleTemp == undefined){
            titleTemp = recupdonnee[i].name;
        }
        let linkPosterTemp = recupdonnee[i].poster_path;
        let dateTemp = recupdonnee[i].release_date;
        let idTemp = recupdonnee[i].id;
        let dateFRATemp = reorganizationDate(dateTemp);

        let div = document.createElement("div");
        div.classList.add("container_selection");
        div.setAttribute("id", idTemp);

        let img = document.createElement("img");
        img.classList.add("selection_img");
        img.setAttribute("name", idTemp);
        img.setAttribute("src", "https://image.tmdb.org/t/p/w500"+linkPosterTemp);

        let pTitle = document.createElement("p");
        pTitle.setAttribute("name", idTemp);
        pTitle.classList.add("selection_titre");
        pTitle.innerHTML = titleTemp;

        let pDate = document.createElement("p");
        pDate.classList.add("selection_titre");
        pDate.innerHTML = "Date de sortie " + dateFRATemp;

        div.appendChild(img);
        div.appendChild(pTitle);
        div.appendChild(pDate);
        posterFilm.appendChild(div);
    }
}

function selectionMedia () {
    let invisibilityOld = document.getElementsByClassName("invisibility");
    if (invisibilityOld.length<1){
        btnEnvoyer.classList.add("invisibility")
    }
    let selctOld = document.getElementsByClassName("js___select");
    if (selctOld.length>0){
        for (y = selctOld.length-1; y >= 0; y--) {
            selctOld[y].classList.remove("js___select");
        }
    }
    this.classList.add("js___select");
    let idPosterRecupTemp = document.getElementsByName(this.id)[0].src;
    let titleRecup = document.getElementsByName(this.id)[1].innerHTML;
    idSelection.value = this.id;
    titreSelection.value = titleRecup;
    typeSelection.value = type.value;
    genreSelection.value = genre.value;
    nbpossedeSelection.value = nbCopie.value;
    idPosterRecup = idPosterRecupTemp.replace("https://image.tmdb.org/t/p/w500",'');
    idPosterSelection.value = idPosterRecup;

    btnEnvoyer.classList.remove("invisibility");
}

function resetPage(){
    let invisibilityOld = document.getElementsByClassName("invisibility");
    if (invisibilityOld.length<1){
        btnEnvoyer.classList.add("invisibility")
    }
    let afficheOld = document.getElementsByClassName("container_selection");
    if (afficheOld.length>0){
        for (x = afficheOld.length-1; x >= 0; x--) {
            posterFilm.removeChild(afficheOld[x]);
        }
    }
    form.reset();
}

function sendData(){
    resetPage();
    alert("Nouveau média ajouter")
}
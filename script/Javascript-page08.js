
//ajout film

var type = document.getElementById("type");
var genre = document.getElementById("genre");
var emplacement = document.getElementById("emplacement");
var filmName = document.getElementById("nomFilm");
var btnValider = document.getElementById("btn-valider");
var posterFilm = document.getElementById("js___posterFilm");
var baFilm = document.getElementById("js___baFilm");
var btnEnvoyer = document.getElementById("btn-envoyer");
var form = document.getElementById("main08");
var nbCopie = document.getElementById("nbCopie");

type.addEventListener("change",ajoutListeGenre);
genre.addEventListener("change",ajoutListeEmplacement);
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
    let optionEmplacementOld = document.getElementsByClassName("optionEmplacement");
    if (optionEmplacementOld.length>0){
        for (i = optionEmplacementOld.length-1; i >= 0; i--) {
            emplacement.removeChild(optionEmplacementOld[i]);
        }
    }

    let optionGenreOld = document.getElementsByClassName("optionGenre");
    if (optionGenreOld.length>0){
        for (i = optionGenreOld.length-1; i >= 0; i--) {
            genre.removeChild(optionGenreOld[i]);
        }
    }

    let value = type.value;
    if (value == "acc"){
        let option = document.createElement("option");
        option.classList.add("optionGenre");
        option.textContent = "Choisissez une option";
        option.value="";
        genre.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionGenre");
        option1.textContent = "Film";
        option1.value="ac-film";
        genre.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionGenre");
        option2.textContent = "Série";
        option2.value="ac-serie";
        genre.appendChild(option2);

    }else if (value == "film" || value == "serie"){
        let option = document.createElement("option");
        option.classList.add("optionGenre");
        option.textContent = "Choisissez une option";
        option.value="";
        genre.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionGenre");
        option1.textContent = "Selection du chef";
        option1.value="chef";
        genre.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionGenre");
        option2.textContent = "Action/aventure";
        option2.value="act";
        genre.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionGenre");
        option3.textContent = "Comedie/comique";
        option3.value="com";
        genre.appendChild(option3);

        let option4 = document.createElement("option");
        option4.classList.add("optionGenre");
        option4.textContent = "Animation/famillial";
        option4.value="fam";
        genre.appendChild(option4);

    }
    else{
        alerte("Erreur Saisie");
    }
}

function ajoutListeEmplacement(){
    let optionEmplacementOld = document.getElementsByClassName("optionEmplacement");
    if (optionEmplacementOld.length>0){
        for (i = optionEmplacementOld.length-1; i >= 0; i--) {
            emplacement.removeChild(optionEmplacementOld[i]);
        }
    }

    let value = genre.value;
    if (value == "chef" || value == "ac-film" || value == "ac-serie"){
        let option = document.createElement("option");
        option.classList.add("optionEmplacement");
        option.textContent = "Choisissez une option";
        option.value="";
        emplacement.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionEmplacement");
        option1.textContent = "Emplacement 1";
        option1.value="emp1";
        emplacement.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionEmplacement");
        option2.textContent = "Emplacement 2";
        option2.value="emp2";
        emplacement.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionEmplacement");
        option3.textContent = "Emplacement 3";
        option3.value="emp3";
        emplacement.appendChild(option3);

    }else if (value == "act" || value == "com" || value == "fam"){
        let option = document.createElement("option");
        option.classList.add("optionEmplacement");
        option.textContent = "Choisissez une option";
        option.value="";
        emplacement.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionEmplacement");
        option1.textContent = "Emplacement 1";
        option1.value="emp1";
        emplacement.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionEmplacement");
        option2.textContent = "Emplacement 2";
        option2.value="emp2";
        emplacement.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionEmplacement");
        option3.textContent = "Emplacement 3";
        option3.value="emp3";
        emplacement.appendChild(option3);

        let option4 = document.createElement("option");
        option4.classList.add("optionEmplacement");
        option4.textContent = "Emplacement 4";
        option4.value="emp4";
        emplacement.appendChild(option4);

    }
    else{
        alert("Erreur Saisie1");
    }
}


function getInfoFilm(){
    if (type.value == ""){
        alert("Veuillez choisir un type de media s'il vous plait")
        return

    }else if (genre.value == ""){
        alert("Veuillez choisir un genre de media s'il vous plait")
        return

    }else if (emplacement.value == ""){
        alert("Veuillez choisir un emplacement de media s'il vous plait")
        return

    }else if (filmName.value == ""){
        alert("Veuillez définir un titre de media s'il vous plait")
        return

    }

    let invisibilityOld = document.getElementsByClassName("invisibility");
    if (invisibilityOld.length<1){
        btnEnvoyer.classList.add("invisibility")
    }

    let baOld = document.getElementsByClassName("liste-ba_vid");
    if (baOld.length>0){
        for (y = baOld.length-1; y >= 0; y--) {
            baFilm.removeChild(baOld[y]);
        }
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
                container[j].addEventListener("click", selectionFilmBa)
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
        img.setAttribute("src", "https://image.tmdb.org/t/p/w500"+linkPosterTemp);

        let pTitle = document.createElement("p");
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

function selectionFilmBa () {
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
    let baOld = document.getElementsByClassName("liste-ba_vid");
    if (baOld.length>0){
        for (z = baOld.length-1; z >= 0; z--) {
            baFilm.removeChild(baOld[z]);
        }
    }
    let idRecupTemp = this.id;
    console.log(idRecupTemp);
    let xhr = new XMLHttpRequest();
    let api = "http://api.themoviedb.org/3/movie/" + idRecupTemp + "/videos?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&append_to_response=videos&language=fr-FR";
    xhr.open("GET", api, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJson=JSON.parse(xhr.responseText);
            let baRecup = donneJson.results;
            selectionBaVid (baRecup);
            let legendeTemp = document.getElementsByClassName("vid_legende");
            for (j = 0; j < legendeTemp.length; j++){
                legendeTemp[j].addEventListener("click", baSelectionner)
            }
        }
    }
}

function selectionBaVid (donneRecup){
    for (let k = 0; k < donneRecup.length; k++) {
        let linkKeyRecup = donneRecup[k].key;

        let div = document.createElement("div");
        div.classList.add("liste-ba_vid");
        div.setAttribute("id", linkKeyRecup);

        let iframe = document.createElement("iframe");
        iframe.classList.add("vid");
        iframe.setAttribute("src", "https://www.youtube.com/embed/"+linkKeyRecup);

        let div2 = document.createElement("div");
        div2.classList.add("vid_legende");

        let p1 = document.createElement("p");
        p1.classList.add("legende_texte");
        p1.textContent = "Selectionner cette bande-annonce";

        let p2 = document.createElement("p");
        p2.textContent = "(Cliquer ici)";

        div2.appendChild(p1);
        div2.appendChild(p2);
        div.appendChild(iframe);
        div.appendChild(div2);
        baFilm.appendChild(div);
    }
}

function baSelectionner () {
    let BAselctOld = document.getElementsByClassName("js___BAselect");
    if (BAselctOld.length>0){
        for (y = BAselctOld.length-1; y >= 0; y--) {
            BAselctOld[y].classList.remove("js___BAselect");
        }
    }
    console.log(this.parentElement.id);
    this.parentElement.classList.add("js___BAselect");

    btnEnvoyer.classList.remove("invisibility");
}

function resetPage(){
    let invisibilityOld = document.getElementsByClassName("invisibility");
    if (invisibilityOld.length<1){
        btnEnvoyer.classList.add("invisibility")
    }
    let baOld = document.getElementsByClassName("liste-ba_vid");
    if (baOld.length>0){
        for (z = baOld.length-1; z >= 0; z--) {
            baFilm.removeChild(baOld[z]);
        }
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
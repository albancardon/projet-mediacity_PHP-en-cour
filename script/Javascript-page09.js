
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
var synopsisSelection = document.getElementById("synopsis-selection");
var affichePoster = document.getElementById("affiche-Poster");

type.addEventListener("change",ajoutListeGenre);
type.addEventListener("change",()=>changeData (typeSelection,type));
genre.addEventListener("change",()=>changeData (genreSelection,genre));
nbCopie.addEventListener("change",()=>changeData (nbpossedeSelection,nbCopie));
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
        option1.value="action/aventure";
        genre.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionGenre");
        option2.textContent = "Comedie/comique";
        option2.value="comedie/comique";
        genre.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionGenre");
        option3.textContent = "Animation/famillial";
        option3.value="familial/enfance";
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

    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer.classList.add("invisibilityBtnEnvoyer")
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
    affichePoster.classList.add("main_affiche");
    affichePoster.classList.remove("invisibility");
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
        recupSynopsis(idTemp);
    }
}

function recupSynopsis(idTemp) {
    let xhr = new XMLHttpRequest();
    let api1 = "https://api.themoviedb.org/3/movie/"+idTemp+"?api_key=369494a80cb8a4b4357c06142e1b61cf&language=FR";
    xhr.open("GET", api1, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        let ajoutfilm = document.getElementById(idTemp);
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJsonSynopsis=JSON.parse(xhr.responseText);
            let synopsisRecup = donneJsonSynopsis.overview;
            let pSynopsis = document.createElement("p");
            let idFilm = "synopsis"+idTemp;
            pSynopsis.setAttribute("id",idFilm);
            pSynopsis.classList.add("synopsis");
            pSynopsis.innerHTML = synopsisRecup;
            ajoutfilm.appendChild(pSynopsis);
        }
    }
}

function selectionMedia () {
    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer.classList.add("invisibilityBtnEnvoyer")
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
    dataSend (this, titleRecup,idPosterRecupTemp);
    btnEnvoyer.classList.remove("invisibilityBtnEnvoyer");
}

function resetPage(){
    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer.classList.add("invisibilityBtnEnvoyer")
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
}

function dataSend (idRecup, titleRecup,idPosterRecupTemp){
    let synopsisSelectionTemp = document.getElementById("synopsis"+ idRecup.id).innerHTML;
    idSelection.value = idRecup.id;
    titreSelection.value = titleRecup;
    idPosterRecup = idPosterRecupTemp.replace("https://image.tmdb.org/t/p/w500",'');
    idPosterSelection.value = idPosterRecup;
    synopsisSelection.value = synopsisSelectionTemp;
}

function changeData (data,saisie){
    data.value = saisie.value;
}


// partie deux/bas du site

var btnValiderSearch = document.getElementById("btn-valider-search");
var titleSearch = document.getElementById("titleSearch");
var posterSearch = document.getElementById("posterSearch");
var nomFilm = document.getElementById("nomFilm2");
var filmSelect = document.getElementById("aside09__film-select");
var titreRecherche = document.getElementById("titreRecherche");
var titreRecherche1 = document.getElementById("titreRecherche1");
var btnValiderModifNb = document.getElementById("btn-valider-modifNb");
var articleGestionNbCopie = document.getElementById("aside09__select-action");

btnValiderSearch.addEventListener("click", recupLinkPoster);
btnValiderModifNb.addEventListener("click", (evt)=>{
    let modifNbCopie = document.getElementById("modifNbCopie").value;
    let modifNbCopieConfirm = document.getElementById("modifNbCopieConfirm").value;
    if (modifNbCopie != modifNbCopieConfirm) {
        alert("nombre entre non identique");
        evt.preventDefault();
    }});

function recupLinkPoster (){
    articleGestionNbCopie.classList.remove("invisibility");
    articleGestionNbCopie.classList.add("select-action");
    filmSelect.classList.remove("invisibility");
    filmSelect.classList.add("aside09__film-select");
    var xhr = new XMLHttpRequest();
    let envoiNomFilm = nomFilm.value;
    var page = "http://localhost/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/mediacity-get-ajax.php?nomFilmGet="+envoiNomFilm;
    xhr.open("GET", page, true);
    xhr.send(null);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            reponse = xhr.responseText;
            if (reponse == "NotDATA"){
                titleSearch.innerHTML = "Media non présent dans la base de donnée";
                articleGestionNbCopie.classList.add("invisibility");
                articleGestionNbCopie.classList.remove("select-action");
                return;
            }else{
                titleSearch.innerHTML = nomFilm.value;
                posterSearch.classList.remove("invisibility");
                posterSearch.setAttribute("src", "https://image.tmdb.org/t/p/w500"+reponse);
                titreRecherche.value = envoiNomFilm;
                titreRecherche1.value = envoiNomFilm;
            }
        }
    }
    
}


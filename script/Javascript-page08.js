
//ajout film

var page = document.getElementById("page");
var typePrincipale = document.getElementById("typePrincipale");
var emplacement = document.getElementById("emplacement");
var filmName = document.getElementById("nomFilm");
var btnValider = document.getElementById("btn-valider");
var posterFilm = document.getElementById("js___posterFilm");
var baFilm = document.getElementById("js___baFilm");
var btnEnvoyer1 = document.getElementById("btn-envoyer1");
var btnEnvoyer2 = document.getElementById("js-btn-val");
var btnEnvoyer = document.getElementById("btn-envoyer");
var form = document.getElementById("main08");
var nbCopie = document.getElementById("nbCopie");
var Ba = 1;
var idSelection = document.getElementById("id-selection");
var titreSelection = document.getElementById("titre-selection");
var categorieSelection = document.getElementById("categorie-selection");
var typePrincipaleSelection = document.getElementById("typePrincipale-selection");
var idPosterSelection = document.getElementById("idPoster-selection");
var idVideoSelection = document.getElementById("idVideo-selection");
var synopsisSelection = document.getElementById("synopsis-selection");
var pageSelection = document.getElementById("page-selection");
var nbpossedeSelection = document.getElementById("nbpossede-selection");
var emplacementSelection = document.getElementById("emplacement-selection");
var affichePoster = document.getElementById("affiche-Poster");

page.addEventListener("change",ajoutListeTypePrincipale);
typePrincipale.addEventListener("change",ajoutListeEmplacement);
btnValider.addEventListener("click",getInfoFilm);
page.addEventListener("change",()=>changeData (pageSelection,page));
typePrincipale.addEventListener("change",()=>changeData (typePrincipaleSelection,typePrincipale));
emplacement.addEventListener("change",()=>changeData (emplacementSelection,emplacement));
btnEnvoyer1.addEventListener("click",dataSend);
btnEnvoyer2.addEventListener("click",ajoutNombre);
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

function ajoutListeTypePrincipale(){
    let optionEmplacementOld = document.getElementsByClassName("optionEmplacement");
    if (optionEmplacementOld.length>0){
        for (i = optionEmplacementOld.length-1; i >= 0; i--) {
            emplacement.removeChild(optionEmplacementOld[i]);
        }
    }

    let optionTypePrincipaleOld = document.getElementsByClassName("optionTypePrincipale");
    if (optionTypePrincipaleOld.length>0){
        for (i = optionTypePrincipaleOld.length-1; i >= 0; i--) {
            typePrincipale.removeChild(optionTypePrincipaleOld[i]);
        }
    }

        let option = document.createElement("option");
        option.classList.add("optionTypePrincipale");
        option.textContent = "Choisissez une option";
        option.value="";
        typePrincipale.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionTypePrincipale");
        option1.textContent = "Action, Aventure";
        option1.value="action/aventure";
        typePrincipale.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionTypePrincipale");
        option2.textContent = "Comedie, Comique";
        option2.value="comedie/comique";
        typePrincipale.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionTypePrincipale");
        option3.textContent = "Familial, Enfance";
        option3.value="familial/enfance";
        typePrincipale.appendChild(option3);

}

function ajoutListeEmplacement(){
    let optionEmplacementOld = document.getElementsByClassName("optionEmplacement");
    if (optionEmplacementOld.length>0){
        for (i = optionEmplacementOld.length-1; i >= 0; i--) {
            emplacement.removeChild(optionEmplacementOld[i]);
        }
    }

    let valuePage = page.value;
    if (valuePage === "pageAccueil") {
        let option = document.createElement("option");
        option.classList.add("optionEmplacement");
        option.textContent = "Choisissez une option";
        option.value="";
        emplacement.appendChild(option);

        let option1 = document.createElement("option");
        option1.classList.add("optionEmplacement");
        option1.textContent = "Emplacement film 1";
        option1.value="ac-film1";
        emplacement.appendChild(option1);

        let option2 = document.createElement("option");
        option2.classList.add("optionEmplacement");
        option2.textContent = "Emplacement film 2";
        option2.value="ac-film2";
        emplacement.appendChild(option2);

        let option3 = document.createElement("option");
        option3.classList.add("optionEmplacement");
        option3.textContent = "Emplacement film 3";
        option3.value="ac-film3";
        emplacement.appendChild(option3);

        let option4 = document.createElement("option");
        option4.classList.add("optionEmplacement");
        option4.textContent = "Emplacement serie 1";
        option4.value="ac-serie1";
        emplacement.appendChild(option4);

        let option5 = document.createElement("option");
        option5.classList.add("optionEmplacement");
        option5.textContent = "Emplacement serie 2";
        option5.value="ac-serie2";
        emplacement.appendChild(option5);

        let option6 = document.createElement("option");
        option6.classList.add("optionEmplacement");
        option6.textContent = "Emplacement serie 3";
        option6.value="ac-serie3";
        emplacement.appendChild(option6);

    } else if (valuePage === "pageFilm" || valuePage === "pageSerie") {
        let valueTypePrincipale = typePrincipale.value;
        switch (valueTypePrincipale) {
            case "action/aventure":
                let option = document.createElement("option");
                option.classList.add("optionEmplacement");
                option.textContent = "Choisissez une option";
                option.value="";
                emplacement.appendChild(option);

                let option1 = document.createElement("option");
                option1.classList.add("optionEmplacement");
                option1.textContent = "Emplacement 1";
                option1.value="act1";
                emplacement.appendChild(option1);

                let option2 = document.createElement("option");
                option2.classList.add("optionEmplacement");
                option2.textContent = "Emplacement 2";
                option2.value="act2";
                emplacement.appendChild(option2);

                let option3 = document.createElement("option");
                option3.classList.add("optionEmplacement");
                option3.textContent = "Emplacement 3";
                option3.value="act3";
                emplacement.appendChild(option3);

                let option4 = document.createElement("option");
                option4.classList.add("optionEmplacement");
                option4.textContent = "Emplacement 4";
                option4.value="act4";
                emplacement.appendChild(option4);
                break;

            case "comedie/comique":
                let optionCom = document.createElement("option");
                optionCom.classList.add("optionEmplacement");
                optionCom.textContent = "Choisissez une option";
                optionCom.value="";
                emplacement.appendChild(option);

                let optionCom1 = document.createElement("option");
                optionCom1.classList.add("optionEmplacement");
                optionCom1.textContent = "Emplacement 1";
                optionCom1.value="com1";
                emplacement.appendChild(optionCom1);

                let optionCom2 = document.createElement("option");
                optionCom2.classList.add("optionEmplacement");
                optionCom2.textContent = "Emplacement 2";
                optionCom2.value="com2";
                emplacement.appendChild(optionCom2);

                let optionCom3 = document.createElement("option");
                optionCom3.classList.add("optionEmplacement");
                optionCom3.textContent = "Emplacement 3";
                optionCom3.value="com3";
                emplacement.appendChild(optionCom3);

                let optionCom4 = document.createElement("option");
                optionCom4.classList.add("optionEmplacement");
                optionCom4.textContent = "Emplacement 4";
                optionCom4.value="com4";
                emplacement.appendChild(optionCom4);
                break;
            

            case "familial/enfance":
                let optionFam = document.createElement("option");
                optionFam.classList.add("optionEmplacement");
                optionFam.textContent = "Choisissez une option";
                optionFam.value="";
                emplacement.appendChild(optionFam);

                let optionFam1 = document.createElement("option");
                optionFam1.classList.add("optionEmplacement");
                optionFam1.textContent = "Emplacement 1";
                optionFam1.value="fam1";
                emplacement.appendChild(optionFam1);

                let optionFam2 = document.createElement("option");
                optionFam2.classList.add("optionEmplacement");
                optionFam2.textContent = "Emplacement 2";
                optionFam2.value="fam2";
                emplacement.appendChild(optionFam2);

                let optionFam3 = document.createElement("option");
                optionFam3.classList.add("optionEmplacement");
                optionFam3.textContent = "Emplacement 3";
                optionFam3.value="fam3";
                emplacement.appendChild(optionFam3);

                let optionFam4 = document.createElement("option");
                optionFam4.classList.add("optionEmplacement");
                optionFam4.textContent = "Emplacement 4";
                optionFam4.value="fam4";
                emplacement.appendChild(optionFam4);
                break;

            default:
                alert("Erreur Saisie");
                break;
        }
    }
}


function getInfoFilm(){
    if (page.value == ""){
        alert("Veuillez choisir une page pour le media s'il vous plait")
        return

    }else if (typePrincipale.value == ""){
        alert("Veuillez choisir un typePrincipale de media s'il vous plait")
        return

    }else if (emplacement.value == ""){
        alert("Veuillez choisir un emplacement de media s'il vous plait")
        return

    }else if (filmName.value == ""){
        alert("Veuillez définir un titre de media s'il vous plait")
        return

    }

    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer1.classList.add("invisibilityBtnEnvoyer")
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
        recupSynopsis(idTemp);
    }
}

function selectionFilmBa () {
    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer1.classList.add("invisibilityBtnEnvoyer")
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
    let xhr = new XMLHttpRequest();
    let api = "http://api.themoviedb.org/3/movie/" + idRecupTemp + "/videos?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&append_to_response=videos&language=fr-FR";
    xhr.open("GET", api, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.status == 404) {
            noBaSelectionner();
        }else if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
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
    this.parentElement.classList.add("js___BAselect");
    let selectTemp = document.getElementsByClassName("js___BAselect")[0];
    selectRecupTemp = selectTemp.childNodes[0].src;
    selectRecup = selectRecupTemp.replace("https://www.youtube.com/embed/",'');
    idVideoSelection.value = selectRecup;
    btnEnvoyer1.classList.remove("invisibilityBtnEnvoyer");
}

function noBaSelectionner () {
    btnEnvoyer1.classList.remove("invisibilityBtnEnvoyer");
}

function resetPage(){
    let invisibilityBtnEnvoyerOld = document.getElementsByClassName("invisibilityBtnEnvoyer");
    if (invisibilityBtnEnvoyerOld.length<1){
        btnEnvoyer1.classList.add("invisibilityBtnEnvoyer")
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

function changeData (data,saisie){
    data.value = saisie.value;
}

function dataSend (){
    let jsSelect = document.getElementsByClassName('js___select')[0];
    EnfantsRecup = jsSelect.childNodes;
    idSelection.value = jsSelect.id;
    titreSelection.value = EnfantsRecup[1].innerHTML;
    idPosterRecupTemp = EnfantsRecup[0].src;
    idPosterRecup = idPosterRecupTemp.replace("https://image.tmdb.org/t/p/w500",'');
    idPosterSelection.value = idPosterRecup;
    let synopsisSelectionTemp = document.getElementById("synopsis"+jsSelect.id);
    if (synopsisSelectionTemp !== null){
        synopsisSelection.value = synopsisSelectionTemp.innerHTML;
    }
    console.log(page.value);
    if (page.value === "pageFilm" || emplacementSelection.value === "ac-film1" || emplacementSelection.value === "ac-film2" || emplacementSelection === "ac-film3") {
        categorieSelection.value = "film";
    }else if (page.value === "pageSerie" || emplacementSelection.value === "ac-serie1" || emplacementSelection.value === "ac-serie2" || emplacementSelection === "ac-serie3"){
        categorieSelection.value = "series";
    }else{
        console.log("Error");
    }
}

function ajoutNombre(){
    let nbCopie = document.getElementById("nbCopie");
    nbpossedeSelection.value = nbCopie.value;
    btnEnvoyer.classList.remove("invisibility");
}

function sendData(){
    btnEnvoyer.classList.add("invisibility");
    resetPage();
}
var btnUp=document.querySelectorAll(".bouton-up")[0];
var title=document.getElementsByClassName("title")[0];
var hauteurScrool=(window.innerHeight/10);
var opacite=0;
btnUp.addEventListener("click",moveInteval);
window.addEventListener("scroll",fctOpacityBtnUp);


//fonctions pour bouton haut de page
//fonction remonter
function moveInteval(){
    moveWindow= setInterval(
        () =>{
            let positionWindow=window.scrollY;
            if(positionWindow>0) {
                positionWindow-=hauteurScrool;
                window.scrollBy(0,-hauteurScrool);
            }else{
                Stop()
            }
        }, 
        10);
    moveWindow
}
function Stop(){
    clearInterval(moveWindow)
};
//fonction opaciter bouton haut de page
function fctOpacityBtnUp(){
    let position=window.scrollY;
    if(position>=230){
        opacite+=0.01;
        if((btnUp.style.opacity)<=0.5){
            btnUp.style.opacity=opacite;
        }
        else{
            opacite=0.5;
        }
    }
    else if(position<=50){
        btnUp.style.opacity=0;
    }
    else{
        btnUp.style.opacity-=0.05;
    }
};
function fctStartBtnUp(){
    let position=window.scrollY;
    if(position>=230){
        opacite=0.5;
        btnUp.style.opacity=0.5;
    }
};
fctStartBtnUp();

//quizz page07 modale

let modal=null;
const focusableSelector = "button, a, input, textarea";
let focusables =[];
let previouslyFocusedElement = null;


const openModal = function (e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    focusables=Array.from(modal.querySelectorAll(focusableSelector));//créé un tableau et non pas une liste
    previouslyFocusedElement = document.querySelector(":focus");
    modal.style.display=null;
    focusables[0].focus();
    modal.removeAttribute("aria-hidden");
    modal.setAttribute("aria-modal","true");
    modal.addEventListener("click", closeModal);
    modal.querySelector(".js-modal-close").addEventListener("click",closeModal);
    modal.querySelector(".js-modal-stop").addEventListener("click",stopPropagation);
}

const closeModal = function(e){//fait l'inverse de la fct° openmodal
    if (modal===null){
        return;
    }
    if(previouslyFocusedElement !== null){
        previouslyFocusedElement.focus()
    }
    e.preventDefault();
    modal.setAttribute("aria-hidden", "true");
    modal.removeAttribute("aria-modal");
    modal.removeEventListener("click", closeModal);
    modal.querySelector(".js-modal-close").removeEventListener("click",closeModal);
    modal.querySelector(".js-modal-stop").removeEventListener("click",stopPropagation);
    const hideModale =function(){
        modal.style.display = "none";
        modal.removeEventListener("animationend", hideModale)
        modal = null;
    } ;
    modal.addEventListener("animationend", hideModale );
}
const stopPropagation=function(e){
    e.stopPropagation();//evite la propagation de l'evenement au parent (donc le pb du click qui close)
}
const focusInModal = function (e){
    e.preventDefault();
    let index = focusables.findIndex(f=>f===modal.querySelector(":focus"));
    if(e.shiftkey === true){//si la touche shigt est enffoncé
        index--;
    }else{
        index++;
    }
    if (index >= focusables.length){
        index=0;
    }
    if (index < 0){
        index = focusables.length-1;
    }
    focusables[index].focus();
}
const change = function (e) {
    closeModal(e);
    setTimeout(openModal(e),500);
}

document.querySelectorAll(".js-modal").forEach(a=>{//pour chaque element "a" du tableau appliquer un écouteur
    a.addEventListener("click",openModal);
})
document.querySelectorAll(".js-modal-switch").forEach(a=>{//pour chaque element "a" du tableau appliquer un écouteur
a.addEventListener("click",change);})

window.addEventListener("keydown",function(e){
    if (e.key === "Escape" || e.key === "Esc"){
        closeModal(e);
    };
    if ( e.key === "Tab" && modal !== null){
        focusInModal(e);
    }
})

//quizz page07 affichage boite dialogue

var btnVal=document.getElementsByClassName("js-btn-val");
var dial=Array.from(document.getElementsByClassName("dialogue"));
var a=0;
var b=0;
for(i=0;i<btnVal.length;i++){
    btnVal[i].addEventListener("click",()=>{
        a++;
        dial[a].classList.toggle("dial__visibility");
        dial[a].classList.toggle("dial__hidden");
        dial[b].classList.toggle("dial__visibility");
        dial[b].classList.toggle("dial__hidden");
        b++;
    });
}

//fonction ajout bande annonce (BA)

var nameFilm = document.getElementsByClassName("nom-selection");
var contentUrl ;
var newDateFilm="";

window.onload = ajoutBA();

function getPoster(afficheBA,film,poster){
    let xhr = new XMLHttpRequest();
    let api = "https://api.themoviedb.org/3/search/movie?api_key=369494a80cb8a4b4357c06142e1b61cf&language=FR&query="+film;
    xhr.open("GET", api, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJson=JSON.parse(xhr.responseText);
            linkPoster = donneJson.results[0].poster_path;
            idFilm = donneJson.results[0].id;
            poster.setAttribute("src", "https://image.tmdb.org/t/p/w500"+linkPoster);
            getBA(afficheBA,idFilm);
        }
    }
}

function getBA(afficheBA,idFilm){
    let xhr = new XMLHttpRequest();
    let api = "http://api.themoviedb.org/3/movie/" + idFilm + "/videos?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&append_to_response=videos&language=fr-FR";
    xhr.open("GET", api, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJson=JSON.parse(xhr.responseText);
            idLink=donneJson.results[0].key;
            afficheBA.setAttribute("src", "https://www.youtube.com/embed/"+idLink);
        }
    }
}

function ajoutBA(){
    for (i = 0; i < nameFilm.length; i++) {
        let nomFilm = nameFilm[i].innerHTML;
        let afficheBA = document.getElementsByClassName("JS__BA-selection")[i];
        let poster = document.getElementsByClassName("JS__BA-poster")[i];
        getPoster(afficheBA,nomFilm,poster);
    }
}

//ajout film

var type = document.getElementById("type");
var genre = document.getElementById("genre");
var emplacement = document.getElementById("emplacement");
var filmName = document.getElementById("nomFilm");
var btnValider = document.getElementById("btn-valider");
var posterFilm = document.getElementById("js___posterFilm");
var baFilm = document.getElementById("js___baFilm");
var btnEnvoyer = document.getElementById("btn-envoyer");

type.addEventListener("change",ajoutListeGenre);
genre.addEventListener("change",ajoutListeEmplacement);
btnValider.addEventListener("click",getInfoFilm);


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
    if (value == "film"){
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

    }else if (value == "serie"){
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
        console.log("Erreur Saisie");
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
    if (value == "chef"){
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

    }else if (value == "act"){
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

    }else if (value == "com"){
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

    

    }else if (value == "fam"){
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
        console.log("Erreur Saisie");
    }
}


function getInfoFilm(){
    console.log(type.value);
    console.log(genre.value);
    console.log(emplacement.value);
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
    console.log(baOld.length);
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
    console.log(filmNameRecup);
    let xhr = new XMLHttpRequest();
    let api = "https://api.themoviedb.org/3/search/movie?api_key=369494a80cb8a4b4357c06142e1b61cf&language=FR&query="+filmNameRecup;
    xhr.open("GET", api, true);
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
        let linkPosterTemp = recupdonnee[i].poster_path;
        let dateTemp = recupdonnee[i].release_date;
        let idTemp = recupdonnee[i].id;

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
        pDate.innerHTML = "Date de sortie " + dateTemp;

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
    let xhr = new XMLHttpRequest();
    let api = "http://api.themoviedb.org/3/movie/" + idRecupTemp + "/videos?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&append_to_response=videos&language=fr-FR";
    xhr.open("GET", api, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status ==0)){
            donneJson=JSON.parse(xhr.responseText);
            console.log(donneJson);
            let baRecup = donneJson.results;
            console.log(baRecup);
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

    console.log(btnEnvoyer);
    console.log(btnEnvoyer.classList);
    btnEnvoyer.classList.remove("invisibility");
}
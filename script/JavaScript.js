var btnUp=document.querySelectorAll(".bouton-up")[0];
var title=document.getElementsByClassName("title")[0];
var hauteurScrool=(window.innerHeight/10);
var opacite=0;
var idPage = "";

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


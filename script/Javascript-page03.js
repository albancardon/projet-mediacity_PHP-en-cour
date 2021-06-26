var media = document.getElementsByClassName("js__media");
var nbMedia = media.length;
var btnSuivant = document.getElementById("right");
var btnPrecedent = document.getElementById("left");
let count = 0;
var time = 5000;

btnSuivant.addEventListener("click",slideSuivante);
btnPrecedent.addEventListener("click",slidePrecedent);
window.onload = autoslide();

function slideSuivante(){
    if (media[count].className == 'js__media active suivant'){
        media[count].classList.remove('suivant');
    } else if(media[count].className == 'js__media active precedent'){
        media[count].classList.remove('precedent');
    }
    media[count].classList.remove('active');
    media[count].classList.add('inactive');
    if (count < nbMedia-1) {
        count++;
    }else{
        count = 0;
    }
    media[count].classList.remove('inactive');
    media[count].classList.add('active');
    media[count].classList.add('suivant');
}

function slidePrecedent(){
    if (media[count].className == 'js__media active suivant'){
        media[count].classList.remove('suivant');
    } else if(media[count].className == 'js__media active precedent'){
        media[count].classList.remove('precedent');
    }
    media[count].classList.remove('active');
    media[count].classList.add('inactive');
    if (count > 0) {
        count--;
    }else{
        count = nbMedia-1;
    }
    media[count].classList.remove('inactive');
    media[count].classList.add('active');
    media[count].classList.add('precedent');
}

function autoslide() {
    setInterval(slideSuivante, time);
}
var mediaAct = document.getElementsByClassName("js__media-act");
var nbMediaAct = mediaAct .length;
var btnSuivantAct = document.getElementById("right-act");
var btnPrecedentAct = document.getElementById("left-act");
let countAct = 0;
var time = 5000;

btnSuivantAct.addEventListener("click",slideSuivanteAct);
btnPrecedentAct.addEventListener("click",slidePrecedentAct);
window.onload = autoslide();


function autoslide() {
    setInterval(() => {
        slideSuivanteAct();
        slideSuivanteCom();
        slideSuivanteFam();
    }, time);
}
function slideSuivanteAct(){
    if (mediaAct[countAct].className == 'js__media-act active suivant'){
        mediaAct[countAct].classList.remove('suivant');
    } else if(mediaAct[countAct].className == 'js__media-act active precedent'){
        mediaAct[countAct].classList.remove('precedent');
    }
    mediaAct[countAct].classList.remove('active');
    mediaAct[countAct].classList.add('inactive');
    if (countAct < nbMediaAct-1) {
        countAct++;
    }else{
        countAct = 0;
    }
    mediaAct[countAct].classList.remove('inactive');
    mediaAct[countAct].classList.add('active');
    mediaAct[countAct].classList.add('suivant');
}

function slidePrecedentAct(){
    if (mediaAct[countAct].className == 'js__media-act active suivant'){
        mediaAct[countAct].classList.remove('suivant');
    } else if(mediaAct[countAct].className == 'js__media-act active precedent'){
        mediaAct[countAct].classList.remove('precedent');
    }
    mediaAct[countAct].classList.remove('active');
    mediaAct[countAct].classList.add('inactive');
    if (countAct > 0) {
        countAct--;
    }else{
        countAct = nbMediaAct-1;
    }
    mediaAct[countAct].classList.remove('inactive');
    mediaAct[countAct].classList.add('active');
    mediaAct[countAct].classList.add('precedent');
}


var mediaCom = document.getElementsByClassName("js__media-com");
var nbMediaCom = mediaCom .length;
var btnSuivantCom = document.getElementById("right-com");
var btnPrecedentCom = document.getElementById("left-com");
let countCom = 0;

btnSuivantCom.addEventListener("click",slideSuivanteCom);
btnPrecedentCom.addEventListener("click",slidePrecedentCom);

function slideSuivanteCom(){
    if (mediaCom[countCom].className == 'js__media-com active suivant'){
        mediaCom[countCom].classList.remove('suivant');
    } else if(mediaCom[countCom].className == 'js__media-com active precedent'){
        mediaCom[countCom].classList.remove('precedent');
    }
    mediaCom[countCom].classList.remove('active');
    mediaCom[countCom].classList.add('inactive');
    if (countCom < nbMediaCom-1) {
        countCom++;
    }else{
        countCom = 0;
    }
    mediaCom[countCom].classList.remove('inactive');
    mediaCom[countCom].classList.add('active');
    mediaCom[countCom].classList.add('suivant');
}

function slidePrecedentCom(){
    if (mediaCom[countCom].className == 'js__media-com active suivant'){
        mediaCom[countCom].classList.remove('suivant');
    } else if(mediaCom[countCom].className == 'js__media-com active precedent'){
        mediaCom[countCom].classList.remove('precedent');
    }
    mediaCom[countCom].classList.remove('active');
    mediaCom[countCom].classList.add('inactive');
    if (countCom > 0) {
        countCom--;
    }else{
        countCom = nbMediaCom-1;
    }
    mediaCom[countCom].classList.remove('inactive');
    mediaCom[countCom].classList.add('active');
    mediaCom[countCom].classList.add('precedent');
}


var mediaFam = document.getElementsByClassName("js__media-fam");
var nbMediaFam = mediaFam .length;
var btnSuivantFam = document.getElementById("right-fam");
var btnPrecedentFam = document.getElementById("left-fam");
let countFam = 0;

btnSuivantFam.addEventListener("click",slideSuivanteFam);
btnPrecedentFam.addEventListener("click",slidePrecedentFam);

function slideSuivanteFam(){
    if (mediaFam[countFam].className == 'js__media-fam active suivant'){
        mediaFam[countFam].classList.remove('suivant');
    } else if(mediaFam[countFam].className == 'js__media-fam active precedent'){
        mediaFam[countFam].classList.remove('precedent');
    }
    mediaFam[countFam].classList.remove('active');
    mediaFam[countFam].classList.add('inactive');
    if (countFam < nbMediaFam-1) {
        countFam++;
    }else{
        countFam = 0;
    }
    mediaFam[countFam].classList.remove('inactive');
    mediaFam[countFam].classList.add('active');
    mediaFam[countFam].classList.add('suivant');
}

function slidePrecedentFam(){
    if (mediaFam[countFam].className == 'js__media-fam active suivant'){
        mediaFam[countFam].classList.remove('suivant');
    } else if(mediaFam[countFam].className == 'js__media-fam active precedent'){
        mediaFam[countFam].classList.remove('precedent');
    }
    mediaFam[countFam].classList.remove('active');
    mediaFam[countFam].classList.add('inactive');
    if (countFam > 0) {
        countFam--;
    }else{
        countFam = nbMediaFam-1;
    }
    mediaFam[countFam].classList.remove('inactive');
    mediaFam[countFam].classList.add('active');
    mediaFam[countFam].classList.add('precedent');
}
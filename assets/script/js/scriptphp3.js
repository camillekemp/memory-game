const cards = document.querySelectorAll('.memory-card');
const html_score = document.querySelector('.score');
const progressBarFull = document.getElementById("progressBarFull");
let matchPoints= 0;
console.log(html_score.value);
const MAX_LEVEL=7;

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add('flip');

  if (!hasFlippedCard) {
    // first click
    hasFlippedCard = true;
    firstCard = this;

    return demarrer();
  }

  // second click
  secondCard = this;

  checkForMatch();
}

var i=0;
function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
  let nbPaire=7; 

  isMatch ? disableCards() : unflipCards();
if(isMatch){
  //disableCards();
  i++;
  // barre de progression peut donc augmenter
  matchPoints++;
  progressingBar();
}
else{
  unflipCards();
}


  if(i==nbPaire){
    let a = document.createElement('a');
    a.innerText = "Fin";
    a.title = "my title text";
    a.href = "/Hackathon/views/acceuil.php";
    document.body.appendChild(a);
    a.classList.add('btn-manche');
    window.confetti();
    
  }

}

function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);



  resetBoard();
}

function unflipCards() {
  lockBoard = true;
  
  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');

    resetBoard();
  }, 1000);
  

}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 6);
    card.style.order = randomPos;
  });
})();

cards.forEach(card => card.addEventListener('click', flipCard));


//function victory(){}


//chrono

let chrono = document.getElementById("chrono");
let resetBtn = document.getElementById("reset");
let stopBtn = document.getElementById("stop");
let startBtn = document.getElementById("start");



//chrono en décompte de 60 secondes
let minutes = 0;
let secondes = 61;

let timeout;
let estArrêter = true;

const demarrer = () => {
    if(estArrêter){
        estArrêter = false;
        defilerTemps();
    }
}

const arreter = () => {
    if(!estArrêter){
        estArrêter = true;
        clearTimeout(timeout);
    }
}

const defilerTemps = () => {
    if(estArrêter) return;

    secondes = parseInt(secondes);
    minutes = parseInt(minutes);

    secondes--;

    if(secondes == 61){
        minutes--;
        secondes = 0;
    }
    if(minutes == 61){
        minutes = 0;
    }

    //affichage
    if(secondes <10){
        secondes = "0" + secondes;
    }

    if (minutes <10){
        minutes = "0" + minutes;
    }

    if(secondes==00){
      alert(" Désolé vous avez perdu!");
      reset()
    }

    chrono.textContent = `${minutes}:${secondes}`;

    timeout = setTimeout(defilerTemps,1000);
}

const reset = () => {
  clearTimeout(timeout);
    chrono.textContent = "00:00";
    estArrêter = true;
    minutes = 00;
    secondes = 60;
    
}

//barre de progression
function progressingBar(){
  progressBarFull.style.width = `${(matchPoints / MAX_LEVEL) * 100}%`;
}
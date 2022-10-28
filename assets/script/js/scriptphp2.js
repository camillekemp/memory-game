const cards = document.querySelectorAll('.memory-card');
const html_score = document.querySelector('.score');
console.log(html_score.value);

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

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();
  
      let a = document.createElement('a');
      a.innerText = "Manche 3";
      a.title = "my title text";
      a.href = "/Hackathon/views/phpManche3.php";
      document.body.appendChild(a);
            a.classList.add('btn-manche');

 
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



//chrono en décompte de 30 secondes
let minutes = 0;
let secondes = 31;

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

    if(secondes == 31){
        minutes--;
        secondes = 0;
    }
    if(minutes == 31){
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
    chrono.textContent = "00:00";
    estArrêter = true;
    minutes = 00;
    secondes = 00;
    clearTimeout(timeout);
}

//barre de progression avec ajax


const progressBarFill=document.querySelector("#progressBar>.progress-bar-fill");
const progressBarText=document.querySelector(".progress-bar-text");

checkForMatch().addEventListener("click",progressionBar);

function progressionBar(e){
  e.preventDefault();
  const xhr=new XMLHttpRequest();
  xhr.open("POST","");
  
}
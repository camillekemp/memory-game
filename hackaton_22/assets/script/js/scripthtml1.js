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

    return;
  }

  // second click
  secondCard = this;

  checkForMatch();
}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();
  
}

function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);

  // rajouter points
html_score.innerHTML = parseInt(html_score.innerHTML)+1; 
  console.log("victory");

  //rajouter 1 point dans la base de données

  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
  if (xhr.readyState == 4){
    if (xhr.status == 200|| xhr.status == 304) {
      let reponse = xhr.responseText;
      html_score.innerText = parseInt(reponse);
    }

    else {
      console.log("erreur")
    }
      
  }
};
  xhr.open('GET',`./scoresHTMLTraitement.php?score=${html_score.innerText}`);
  xhr.send();


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
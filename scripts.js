const cardData = [
    {
        id:0,
        front:"icons/html5.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:1,
        front:"icons/html5.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:2,
        front:"icons/css3-alt.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:3,
        front:"icons/css3-alt.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:4,
        front:"icons/js-square.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:5,
        front:"icons/js-square.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:6,
        front:"icons/jquery.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:7,
        front:"icons/jquery.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: true,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:8,
        front:"icons/php.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:9,
        front:"icons/php.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:10,
        front:"icons/node.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:11,
        front:"icons/node.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:12,
        front:"icons/laravel.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:13,
        front:"icons/laravel.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:14,
        front:"icons/python.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:15,
        front:"icons/python.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: true,
        hard: true,
        insane: true
    },
    {
        id:16,
        front:"icons/angular.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:17,
        front:"icons/angular.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:18,
        front:"icons/react.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:19,
        front:"icons/react.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:20,
        front:"icons/vuejs.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:21,
        front:"icons/vuejs.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:22,
        front:"icons/npm.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:23,
        front:"icons/npm.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: true,
        insane: true
    },
    {
        id:24,
        front:"icons/bootstrap.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:25,
        front:"icons/bootstrap.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:26,
        front:"icons/wordpress.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:27,
        front:"icons/wordpress.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:28,
        front:"icons/drupal.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:29,
        front:"icons/drupal.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:30,
        front:"icons/sass.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:31,
        front:"icons/sass.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:32,
        front:"icons/less.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:33,
        front:"icons/less.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:34,
        front:"icons/git-alt.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    },
    {
        id:35,
        front:"icons/git-alt.svg",
        back:"icons/memory-game.svg",
        flipped: false,
        locked: false,
        easy: false,
        medium: false,
        hard: false,
        insane: true
    }
];
const currentScore = document.getElementById("currentScore");
const gameBoard = document.getElementById("game-board");
const cardArea = document.getElementById("cards");
const gameSelect = document.getElementById("game-select");
const gameOver = document.getElementById("game-over");
const quitBtn = document.getElementById("quit");
const guessCount = document.getElementById("game").querySelectorAll(".guess-count");

// IN GAME VARIABLES
let user = document.getElementById("currentUser").innerHTML;
let difficulty;
let guesses = 0;
let htmlCards;
let gameCards = [];
let flippedCards = [];
let gameActive = false;
let gameFinal = {"user": user, "difficulty": "", "guesses": 0};

// FUNCTIONS

function reset(){
    gameCards = [];
    flippedCards = [];
    guesses = 0;
    gameFinal = {"user": user, "difficulty": "", "guesses": 0};
    
    let previousGame = document.querySelectorAll(".playing-card");
    for(let i=0; i<previousGame.length; i++){
        cardArea.removeChild(previousGame[i]);
    }
    updateScore();
}

function startGame(){
    difficulty = document.getElementById("difficulty").value;
    gameSelect.style.display = "none";
    gameBoard.style.display = "block";
    currentScore.style.display = "inline-block";
    quitBtn.style.display = "inline-block";
    cardArea.classList.add(difficulty);
    getCardData();
    shuffleCards(gameCards);
    createCards(gameCards);
}

function getCardData(){
    for(let i=0; i<cardData.length; i++){
        if(cardData[i][difficulty]){
            gameCards.push(cardData[i]);
        }
    }
    for(let i=0; i<gameCards.length; i++){
        gameCards[i].locked = false;
    }

}

function shuffleCards(deck){
    let counter = deck.length;
    let index;
    let temp;

    while(counter > 0){
        index = Math.floor(Math.random() * counter);
        counter --;
        temp = deck[counter];
        deck[counter] = deck[index];
        deck[index] = temp;
    }
    
    return deck;
}

function createCards(deck){
    for(let i=0; i<deck.length; i++){
        let card = document.createElement("div");
        let front = document.createElement("div");
        let frontFace = document.createElement("img");
        let back = document.createElement("div");
        let backFace = document.createElement("img");
    
        frontFace.setAttribute("src", deck[i]["front"]);
        front.setAttribute("class", "card-front card-"+difficulty);
        backFace.setAttribute("src", deck[i]["back"]);
        back.setAttribute("class", "card-back card-"+difficulty);
        card.setAttribute("id", deck[i]["id"]);
        card.setAttribute("class", "playing-card card-"+difficulty);
        front.appendChild(frontFace);
        back.appendChild(backFace);
        card.appendChild(front);
        card.appendChild(back);
        document.getElementById("cards").appendChild(card);
    }

    htmlCards = document.querySelectorAll(".playing-card");

    for(let i=0; i<htmlCards.length; i++){
        htmlCards[i].addEventListener("click", flipCard);
    }
}

function flipCard(){
    if(flippedCards.length<2){
        let cardID = this.getAttribute("id");
        let classes = this.classList.value;
        for(let i=0; i<gameCards.length; i++){
            if(gameCards[i].id == cardID){
                flippedCards.push(gameCards[i]);
                this.removeEventListener("click", flipCard);
            }
        }
        
        if(classes.includes("flop")){
            this.classList.add("flip");
            this.classList.remove("flop");
        } else {
            this.classList.add("flip");
        }

        checkMatch();
    }
}

function checkMatch(){
    if(flippedCards.length === 2){
        if(flippedCards[0].id !== flippedCards[1].id && flippedCards[0].front === flippedCards[1].front){
            for(let i=0; i<flippedCards.length; i++){
                flippedCards[i].locked = true;
            }
            setTimeout(
                function(){
                    let card1 = document.getElementById(flippedCards[0].id);
                    let card2 = document.getElementById(flippedCards[1].id);

                    flippedCards = [];
                    guesses++;
                    updateScore();
                    checkGameEnd();
                }, 500);

        } else {
            for(let i=0; i<flippedCards.length; i++){
                flippedCards[i].locked = false;
                flippedCards[i].flipped = false;
            }
            setTimeout(
                function(){
                    let card1 = document.getElementById(flippedCards[0].id);
                    let card2 = document.getElementById(flippedCards[1].id);
                    
                    card1.classList.add("flop");
                    card2.classList.add("flop");
                    card1.classList.remove("flip", "locked");
                    card2.classList.remove("flip", "locked");
                    card1.addEventListener("click", flipCard);
                    card2.addEventListener("click", flipCard);
                    flippedCards = [];
                    guesses++;
                    updateScore();
                }, 1000);
        }
    }
}

function updateScore(){
    for(let i=0; i<guessCount.length; i++){
        guessCount[i].innerHTML = guesses;
    }
}

function checkGameEnd(){
    let gameEnd = false;
    let lockedCards = 0;
    for(let i=0; i<gameCards.length; i++){
        if(gameCards[i].locked){
            lockedCards++;
        }
    }
    if(lockedCards === gameCards.length){
        gameEnd = true;
    }
    if(gameEnd === true){
        gameFinal.difficulty = difficulty;
        gameFinal.guesses = guesses;
        gameOver.style.display = "flex";
    }
}

function playAgain(){
    recordGame();
    reset();
    getCardData();
    shuffleCards(gameCards);
    createCards(gameCards);
    gameOver.style.display = "none";
}

function mainMenu(){
    recordGame();
    reset();
    gameOver.style.display = "none";
    gameBoard.style.display = "none";
    currentScore.style.display = "none";
    quitBtn.style.display = "none";
    gameSelect.style.display = "block";
}

function dashboardReturn(){
    recordGame();
    window.location.href = "dashboard.php";
}

function quitGame(){
    cardArea.classList.remove(difficulty);
    difficulty = null;
    reset();
    gameBoard.style.display = "none";
    currentScore.style.display = "none";
    quitBtn.style.display = "none";
    gameSelect.style.display = "block";

}

function recordGame(){
    let final = JSON.stringify(gameFinal);
    let submission = new XMLHttpRequest();
    submission.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          let response = JSON.parse(this.responseText);
          let best = parseInt(response[0]);
          let avg = parseInt(response[1]);
          let total = parseInt(response[2]);
        }
      };
    submission.open("POST", "update.php", true);
    submission.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    submission.send("final="+final);
}
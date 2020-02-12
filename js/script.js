class Pokemon {
  constructor(atak, life) {
    this.atak = atak;
    this.life = life;
  }
}

Pok1 = new Pokemon(15, 100);
Pok2 = new Pokemon(20, 120);

function castagne1() {
  if (Pok2.life <= Pok1.atak) {
    alert("Vous avez gagné !");
    document.location.reload(true);
  }
  Pok2.life = Pok2.life - Pok1.atak;
  console.log(Pok2.life);

}

function castagne2() {
  if (Pok1.life <= Pok2.atak) {
    alert("Vous avez perdu !");
    document.location.reload(true);
  }
  Pok1.life = Pok1.life - Pok2.atak;
  console.log(Pok1.life);

}

function attaquer() {

  castagne1();
  castagne2();
  document.getElementById("hp1").innerHTML = Pok1.life;
  document.getElementById("hp2").innerHTML = Pok2.life;
}



function choose() {
    
  document.getElementById("choose").style.visibility = "visible";
  document.getElementById("play").style.visibility = "hidden";
  document.getElementById("battle").style.visibility = "visible";
  document.getElementById("poke").style.display = "none";
  document.getElementById("logo").style.display = "none";
  
  let elem = document.getElementById('choose');
  elem.style.visibility = "visible";


  let elem2 = document.getElementById('battle');
  elem2.style.visibility = "visible";
}
let button = document.getElementById("play");
button.addEventListener("click",choose);




let pokemons = document.getElementsByClassName("avatar");
console.log(pokemons.lenght);

for (let i = 0; i < (pokemons.length); i++) {
  pokemons[i].addEventListener('click', function () {

    //console.log(pokemons[i]);
    let pok = pokemons[i];
    console.log(pok.dataset.name, pok.dataset.life, pok.dataset.atak, pok.dataset.desc);
  })

}



function battle() {

  document.getElementById("choose").style.display = "none";
  document.getElementById("battle").style.display = "none";
  document.getElementById("test").style.visibility = "visible";
  document.getElementById("logo").style.visibility = "hidden";

}

let button2 = document.getElementById("battle");
button2.addEventListener("click",battle);


function reset() {
  document.location.reload(true);
}















/*
 if (Pok2.life > 0) {
   castagne1();
  }

  if (Pok1.life >= 0) {
    castagne2();
  }
} */






/*if (Pok2.life < 0) {
  alert("Vous avez perdu");
  document.location.reload(true);
}
//else {
//console.log("Vous avez perdu");
//}*/
œ

class Pokemon {
  constructor(atak, vie) {
    this.atak = atak;
    this.vie = vie;
  }
}

Pok1 = new Pokemon(12, 1000);
Pok2 = new Pokemon(160, 860);

darkrai = new Pokemon()

function castagne1() {
  if (Pok2.vie <= Pok1.atak) {
    alert("Vous avez gagné");
    document.location.reload(true);
}
  Pok2.vie = Pok2.vie - Pok1.atak;
  console.log(Pok2.vie);
}

function castagne2() {
  if (Pok1.vie <= Pok2.atak) {
    alert("Vous avez perdu");
    document.location.reload(true);
}
  Pok1.vie = Pok1.vie - Pok2.atak;
  console.log(Pok1.vie);
  
}

function attaquer() {

castagne1();
castagne2();
document.getElementById("hp1").innerHTML = Pok1.vie;
document.getElementById("hp2").innerHTML = Pok2.vie;
}


/*
 if (Pok2.vie > 0) {
   castagne1();
  }

  if (Pok1.vie >= 0) {
    castagne2();
  }
} 






if (Pok2.vie < 0) {
  alert("Vous avez perdu");
}
 //else {
    //console.log("Vous avez perdu");
//}

*/



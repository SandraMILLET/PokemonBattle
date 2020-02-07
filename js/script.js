class Pokemon {
  constructor(atak, vie) {
    this.atak = atak;
    this.vie = vie;
  }
}

Pok1 = new Pokemon(15, 100);
Pok2 = new Pokemon(20, 120);

function castagne1() {
  if (Pok2.vie <= Pok1.atak) {
    alert("Vous avez gagné");
}
  Pok2.vie = Pok2.vie - Pok1.atak;
  console.log(Pok2.vie);
  
}

function castagne2() {
  if (Pok1.vie <= Pok2.atak) {
    alert("Vous avez gagné");
}
  Pok1.vie = Pok1.vie - Pok2.atak;
  console.log(Pok1.vie);
  
}

function attaquer() {

castagne1();
castagne2();
}

/*
 if (Pok2.vie > 0) {
   castagne1();
  }

  if (Pok1.vie >= 0) {
    castagne2();
  }
} */






if (Pok2.vie < 0) {
  alert("Vous avez perdu");
}
 //else {
    //console.log("Vous avez perdu");
//}





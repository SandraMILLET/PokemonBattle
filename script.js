class Pokemon {
  constructor(atak, vie) {
    this.atak = atak;
    this.vie = vie;
  }
}

Pok1 = new Pokemon(0, 200);
Pok2 = new Pokemon(0, 220);

function castagne1() {
  if (Pok2.vie <= Pok1.atak) {
    alert("Vous avez gagné");
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
  document.getElementById("hp1").innerHTML = "Test3";
  document.getElementById("hp2").innerHTML = "Test 4";
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
  document.location.reload(true);
}
//else {
//console.log("Vous avez perdu");
//}
class Pokemon {
  constructor(atak, vie) {
    this.atak = atak;
    this.vie = vie;
  }
}

Pok1 = new Pokemon(13, 100);
Pok2 = new Pokemon(20, 100);

function castagne1() {
  Pok2.vie = Pok2.vie - Pok1.atak;
}

function castagne2() {
  Pok1.vie = Pok1.vie - Pok2.atak;
}

do {
  if (Pok2.vie > 0) {
    castagne1();
  }

  if (Pok1.vie >= 0) {
    castagne2();
  }
} while (Pok1.vie > 0, Pok2.vie > 0);

console.log(Pok1.vie);
console.log(Pok2.vie);

if (Pok1.vie > 0) {
    console.log("Vous avez gagné");
}

else {
    console.log("Vous avez perdu");
}





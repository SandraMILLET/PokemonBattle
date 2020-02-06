class Pokemon {
    constructor(atak, vie) {
        this.atak = atak;
        this.vie = vie;
    }
}

Pok1 = new Pokemon(1, 120);
Pok2 = new Pokemon(1, 100);


function castagne1(){
    Pok2.vie = Pok2.vie - Pok1.atak;
}

function castagne2(){
    Pok1.vie = Pok1.vie - Pok2.atak;
}

do {
    castagne1();
}

while (Pok2.vie > 0){
    if (Pok2.vie == 0) {
        
    }
}

do {
    castagne2();
}

while (Pok1.vie > 0){
    if (Pok1.vie == 0){
    }
}



castagne1();
castagne2();

console.log(Pok1.vie)
console.log(Pok2.vie)
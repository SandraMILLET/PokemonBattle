let Game = {

    setGameStart: function(name){
      this.resetPlayer1(name);
      this.setPreFight();

    },

    resetPlayer1: function(name){
      switch (nom) {
        case "Darkrai":
           player1 = new Joueur1(nom,200,70,50,70);
          break;
        case "Bidoof":
            player1 = new Joueur1(nom,200,70,60,70);
            break;
        case "Noctali":
            player1 = new Joueur1(nom,200,90,60,100);
            break;
        case "Goupix":
            player1 = new Joueur1(nom,200,60,80,110);
            break;





      }
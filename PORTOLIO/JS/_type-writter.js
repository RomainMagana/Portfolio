const txtwriter = document.getElementById('writter');

new Typewriter(txtwriter,{

})
.changeDelay(40)
.typeString('Bonjour !<br>')
.pauseFor(200)
.typeString('Je me présente, ')
.pauseFor(200)
.typeString('Romain,<br>')
.pauseFor(200)
.typeString('actuellement en 1ere année<br> d\'informatique <br> à Sophia Ynov Campus !')
.start();

/*
Bonjour ! <br> Je me présente, Romain,<br>
Actuellement en 1ere année d'informatique <br> à Sophia Ynov Campus ! <br>
*/
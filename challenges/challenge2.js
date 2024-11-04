

let nombrecafe= prompt("combien de cafe avez vous vendu aujourd'hui")
let nombrejus= prompt("combien de jus avez vous vendu aujourd'hui")
let nombrecroissant= prompt("combien de croissant avez vous vendu aujourd'hui")

console.log(parseInt(nombrecafe));
console.log(parseInt(nombrejus));
console.log(parseInt(nombrecroissant));

let prixcafe=2
let prixjus=2.5
let prixcroissant=1.5

let profitcafe= prixcafe*nombrecafe
let profitjus= prixjus*nombrejus
let profitcroissant= prixcroissant*nombrecroissant
console.log("les profit obtenu grace au café est de",profitcafe);
console.log("les profit obtenu grace au jus est de",profitjus);
console.log("les profit obtenu grace au croissant est de",profitcroissant);

let profittotal=profitcafe+profitcroissant+profitjus
console.log("les profit total obtenu sont de",profittotal);

let nombrearticle= parseInt(nombrecafe+nombrecroissant+nombrejus)
console.log("le nombre total d article vendu est de",nombrearticle);

console.log("RESUME DES VENTES:");
console.log(nombrecafe,"de cafe vendu");
console.log(nombrecroissant,"de croissant vendu");
console.log(nombrejus,"de jus vendu");
console.log(profitcafe,"euro gagner grace au cafe");
console.log(profitjus,"euro gagner grace au jus");
console.log(profitcroissant,"euro gagner grace au croissant");
console.log(profittotal,"euro gagner au total");
console.log(nombrearticle,"nombre d article vendu au total");














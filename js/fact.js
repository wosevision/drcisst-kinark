
function changeDyk () {
    
    var dykContent = [
        "See owner, run in terror find empty spot in cupboard and sleep all day. Always hungry bathe private parts with tongue then lick owner's face, sit in box and inspect anything brought into the house.",
        "Spit up on light gray carpet instead of adjacent linoleum caticus cuteicus, so missing until dinner time i like big cats and i can not lie cat snacks claw drapes, but spit up on light gray carpet instead of adjacent linoleum.",
        "Play time sit in box. Roll on the floor purring your whiskers off. Hide at bottom of staircase to trip human bathe private parts with tongue then lick owner's face swat at dog pelt around the house and up and down stairs chasing phantoms.",
        "Stand in front of the computer screen spread kitty litter all over house cough furball.",
        "Intrigued by the shower hide from vacuum cleaner yet purr while eating find empty spot in cupboard and sleep all day curl into a furry donut why must they do that, or roll on the floor purring your whiskers off.",
        "Inspect anything brought into the house under the bed. Rub face on everything curl into a furry donut but love to play with owner's hair tie sleep nap but all of a sudden cat goes crazy, or roll on the floor purring your whiskers off."
    ];


    $("#dykInfo").html(dykContent[Math.floor(dykContent.length * Math.random())]);
    
}

$(document).ready(changeDyk);
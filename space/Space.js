

async function populate(){ // Funzione asincrona diversa dalle sincrone che sono quelle usate fin'ora

    const requestURL = "https://gioelx.github.io/my-repository/astros.json"; // gli viene assegnato un link 

    const request = new Request(requestURL) // crea un nuovo oggetto

    const response = await fetch(request); // await fa partire fetch un po dopo, fetch va in cerca e prende l'oggetto richiesto 
    
    const Space = await response.json(); //carica il json

     populatePeople(Space);

}



function populatePeople(obj){


 const myH2 = document.querySelector('h2');

 myH2.textContent = `Ci sono ${obj.number} persone nello spazio adesso`;

const members = obj.people;

for (const member of members) {

	const myUl = document.querySelector('ul');

	const myLi = document.createElement('li');

	myLi.textContent = `${member.name} ${member.craft}`;

	myUl.appendChild(myLi);

}



}






populate();
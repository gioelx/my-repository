
async function populate(){ // Funzione asincrona diversa dalle sincrone che sono quelle usate fin'ora

    const requestURL = "https://gioelx.github.io/my-repository/Titanic/titanic.json"; // gli viene assegnato un link 

    const request = new Request(requestURL) // crea un nuovo oggetto

    const response = await fetch(request); // await fa partire fetch un po dopo, fetch va in cerca e prende l'oggetto richiesto 
    
    const titanic = await response.json(); //carica il json

     populateCards(titanic);

}


function populateCards(obj){


 const myDiv = document.getElementById('box');

 const passengers = obj.passengers;



for (const passenger of passengers){

	const myCard = document.createElement('div');

	const myH2 = document.createElement('h2');

	const myP1 = document.createElement('p');

	const myP2 = document.createElement('p');

	const myP3 = document.createElement('p');

	const myP4 = document.createElement('p');

	const myP5 = document.createElement('p');





	myH2.textContent = passenger.Name;

	myP1.textContent = `Sex: ${passenger.Sex}`;

	myP2.textContent = `Age: ${passenger.Age}`;

	
//If per trasformare dall'iniziale della città all


	if(passenger.Embarked === "C"){

		myP3.textContent = `Embarked from: Cherbourg`;


	}else if(passenger.Embarked === "Q"){

		myP3.textContent = `Embarked from: Queenstown`;


	}else if(passenger.Embarked === "S"){


		myP3.textContent = `Embarked from: Southampton`;


	}


//If per trasformare sopravvissuti da 1 e 0 a Si o NO

	if(passenger.Survived === 1){

		myP5.textContent = `Survived: Yes`;


	}else if(passenger.Survived === 0){

		myP5.textContent = `Survived: No`;


	}






	myP4.textContent = `Class: ${passenger.Pclass}`;




	myDiv.appendChild(myCard);

	myCard.appendChild(myH2);

	myCard.appendChild(myP1);

	myCard.appendChild(myP2);

	myCard.appendChild(myP3);

	myCard.appendChild(myP4);

	myCard.appendChild(myP5);



}

}






populate();




let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};


function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 



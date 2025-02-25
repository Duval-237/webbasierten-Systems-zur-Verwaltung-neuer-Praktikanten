

let list = document.querySelectorAll('.list');

function activeLink() {
  list.forEach((item) => 
  item.classList.remove('active'));
  this.classList.add('active');
}

list.forEach((item) =>
item.addEventListener('click', activeLink));

/*
const darkMode = document.querySelector('.darkMode');
const html = document.querySelector('html');

darkMode.addEventListener('click', function() {
  html.classList.toggle('dark');
});

*/ 

// var date = new Date();
// var hour = date.getHours();z

// alert(hour);

var form = document.querySelector('form');
// form.addEventListener('submit', function(e) {
  
//   var Matricule = document.querySelector('#Matricule');
//   var Nom = document.querySelector('#Nom');
//   var Prenom = document.querySelector('#Prenom');
//   var Age = document.querySelector('#Age');
//   var Telephone = document.querySelector('#Telephone');
//   var hidden = document.querySelector('#hidden');
  
//   /*--------- Matricule de l'utilisateur ----------*/
//   var exp1 = /^[A-Z0-9]{10}$/;
//   if(!exp1.test(Matricule.value)) {
//     Matricule.style.borderBottom = "2px solid red";
//     hidden.value= "error";
//   }else
//   Matricule.style.borderBottom = "1px solid white";
  
//   /*--------- Nom de l'utilisateur ----------*/
//   var exp2 = /^[A-Za-z]+$/;
//   if(!exp2.test(Nom.value)){
//     Nom.style.borderBottom = "2px solid red";
//     hidden.value= "error";
//   }else
//   Nom.style.borderBottom = "1px solid white";
  
//   /*--------- prenon de l'utilisateur ----------*/
//   var exp3 = /^[A-Za-z]+$/;
//   if(!exp3.test(Prenom.value)){
//     Prenom.style.borderBottom = "2px solid red";
//     hidden.value= "error";
//   }else
//   Prenom.style.borderBottom = "1px solid white";
  
//   /*--------- age de l'utilisateur ----------*/
//   var exp4 = /^[0-9]+$/;
//   if(!exp4.test(Age.value)){
//     Age.style.borderBottom = "2px solid red";
//     hidden.value= "error";
//   }else {
//     if(Age.value > 200) {
//       Age.style.borderBottom = "2px solid red";
//       hidden.value= "error";
//     }else
//     Age.style.borderBottom = "1px solid white";
//   }
  
//   /*--------- Numereo de telephone de l'utilisateur ----------*/
//   var exp5 = /^[0-9]+$/;
//   if(!exp5.test(Telephone.value)){
//     Telephone.style.borderBottom = "2px solid red";
//     hidden.value= "error";
//   }else
//     Telephone.style.borderBottom = "1px solid white";

//   if(hidden.value == 'error') {
//     return false;
//   }
// });


const loader = document.querySelector('#loader');

window.addEventListener("DOMContentLoaded", function() {
  loader.classList.add('fondu');
});


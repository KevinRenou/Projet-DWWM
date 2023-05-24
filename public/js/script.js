let btnCat = document.querySelectorAll('.btn-cat');
let articles= document.querySelectorAll('.carte-article');
let btnTout= document.querySelector('.btn-tout');

//ajoute un évenement au click sur les boutons de catégorie
Array.from(btnCat).forEach(function (element) {
    element.addEventListener("click", function(){
        //recup le nom de la catégorie grace au libellé du btn
    let libelle=element.innerText;
    //selectionne les articles correspondant a la catégorie
    let articleSelect = document.getElementsByClassName(libelle);
        //masque tous les articles avec display none de bootstrap
       Array.from(articles).forEach(element=> {
        element.classList.add('d-none');
       })
       //retire d-none des articles correspondants a la catégorie
       Array.from(articleSelect).forEach(element => {
        element.classList.remove('d-none');
       });
    })
  });

  //boutton pour afficher toutes les catégories, retire la classe d-none
  btnTout.addEventListener("click", function(){
    Array.from(articles).forEach(element=> {
        element.classList.remove('d-none');
       })
  })
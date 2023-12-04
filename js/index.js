

var modal = document.querySelector(' .containerModalAvaliation');

function openModal(){
    modal.style.zIndex = '999';
    modal.style.opacity = '1';
    modal.style.top = '50%';
}

function closeModal(){
    modal.style.zIndex = '0';
    modal.style.opacity = '0';
    modal.style.top = '-150%';
}


var stars = document.querySelectorAll('.contentStarsModal');
var avaliationConfirmation = document.getElementById('avaliationConfirmation');
var selectedAvaliation = document.getElementById('selectedAvaliation');
var initialAvaliation = 0;

stars.forEach((star) =>{

    star.addEventListener('click', () =>{

    var avaliation = parseInt(star.getAttribute('dado-de-avalicao'))

    initialAvaliation = avaliation;

    updateAvaliation();

    toggleBtn();
    
});
 
 star.addEventListener('mouseover', () =>{

    var avaliation = parseInt(star.getAttribute('dado-de-avalicao'))

    starFocus(avaliation);
});

 star.addEventListener('mouseoup', () =>{
    starFocus(avaliation);
 });

function starFocus(avaliation){

    stars.forEach((star) => {

    var selectedStar = parseInt(star.getAttribute('dado-de-avalicao'))


 if (selectedStar <= avaliation){
    
    star.innerHTML = '&#9733;';
 } else{
    star.innerHTML = '&#9734;';
 }

 })

 toggleBtn(avaliation);
 };

 function updateAvaliation(){

    selectedAvaliation.textContent = initialAvaliation;

    avaliationConfirmation.textContent = ` Nossos serviços merecem a nota ${initialAvaliation}?`
 }
 function toggleBtn(avaliation){

    if(avaliation > 0){
        document.querySelector('#btnAvaliation').disabled = true;
        return
    } 
        document.querySelector('#btnAvaliation').disabled = false;
    }

});
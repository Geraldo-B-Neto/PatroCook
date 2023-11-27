var BRtitle = document.getElementById('titleBR');
var PTtitle = document.getElementById('titlePT');
var ITtitle = document.getElementById('titleIT');

var boxBR= document.getElementsByClassName('brasileiro');
var boxPT = document.getElementsByClassName('portugues');
var boxIT = document.getElementsByClassName('italiano');

function revealBR(){    
  BRtitle.style.color = '#FFD700';  
  PTtitle.style.color = 'white';  
  ITtitle.style.color = 'white';    
  
  for(var i=0; i<boxBR.length; i++)  
  {    boxBR[i].style.display = 'block'; 
  }  
  for(var i=0; i<boxPT.length; i++) 
  {    
    boxPT[i].style.display = 'none';  
  }  
  for(var i=0; i<boxIT.length; i++) 
  {    
    boxIT[i].style.display = 'none';  
  }
}
function revealPT(){    
  BRtitle.style.color = 'white';  
  PTtitle.style.color = '#FFD700';  
  ITtitle.style.color = 'white';  
  
  for(var i=0; i<boxBR.length; i++)
  {    
    boxBR[i].style.display = 'none';  
  }  
  for(var i=0; i<boxPT.length; i++)
  {    
    boxPT[i].style.display = 'block'; 
  }  
  for(var i=0; i<boxIT.length; i++) 
  {    
    boxIT[i].style.display = 'none'; 
  }
}
function revealIT(){  
  BRtitle.style.color = 'white';
  PTtitle.style.color = 'white';  
  ITtitle.style.color = '#FFD700';   
  
  for(var i=0; i<boxBR.length; i++) 
  {    
    boxBR[i].style.display = 'none';  
  }  
  for(var i=0; i<boxPT.length; i++)
  {    
    boxPT[i].style.display = 'none';  
  }  
  for(var i=0; i<boxIT.length; i++) 
  {    
    boxIT[i].style.display = 'block';  
  }
}









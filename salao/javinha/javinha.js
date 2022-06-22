vdinheiro = 0;
vdesc = 0;
vboxb = 0;

function caixaresposta(){
    vboxb = vboxb + 1;
    vdinheiro = vdinheiro + 35; 
      
    
   vdesc = (vdesc + 1);

   if (vdesc = 3) 
   {
       vdesc3 = 0;
      vdesc3 = ((vdinheiro / 100) * 10);
       vdesc3 = (vdinheiro - vdesc3);
   }
  else { vboxb = vboxb > 2;
    vdesc3 = ((vdinheiro / 100) * 15);
    vdesc3 = (vdinheiro - vdesc3);
  }
  (validate.cxdesconto.value) = vdesc3;




}

function caixaresposta2(){
    vdesc20 = vdesc + 1; 
 
    vboxb = vboxb + 1;
    vdinheiro = (vdinheiro + 45); 
      
    
    vdesc = (vdesc + 1);
    if (vdesc = 3) 
  {
      vdesc3 = 0;
     vdesc3 = ((vdinheiro / 100) * 10);
      vdesc3 = (vdinheiro - vdesc3);
  }
  else { vboxb = vboxb > 2;
    vdesc3 = ((vdinheiro / 100) * 15);
    vdesc3 = (vdinheiro - vdesc3);
  } 
 

  (validate.cxdesconto.value) = vdesc3;





     
}

function caixaresposta3(){
    
    vdinheiro = (vdinheiro + 250); 
    vboxb = 1;
   
    vdesc = (vdesc + 1);

    if (vdesc = 3) 
  {
      vdesc3 = 0;
     vdesc3 = ((vdinheiro / 100) * 10);
      vdesc3 = (vdinheiro - vdesc3);
  }

  else { vboxb = vboxb > 2;
    vdesc3 = ((vdinheiro / 100) * 15);
    vdesc3 = (vdinheiro - vdesc3);
  }
 






      (validate.cxdesconto.value) = vdesc3;
}

function caixaresposta4(){
    vdesc20 = vdesc + 1; 
    
    vboxb = vboxb + 1;
    vdinheiro = (vdinheiro + 200); 
 
   
    vdesc = (vdesc + 1);
    if (vdesc = 3) 
  {
      vdesc3 = 0;
     vdesc3 = ((vdinheiro / 100) * 10);
      vdesc3 = (vdinheiro - vdesc3);
  }
  else { vboxb = vboxb > 2;
    vdesc3 = ((vdinheiro / 100) * 15);
    vdesc3 = (vdinheiro - vdesc3);
  }

 
  (validate.cxdesconto.value) = vdesc3;


}

function caixaresposta5(){
    vboxb = vboxb + 1;
    vdinheiro = (vdinheiro + 65); 
      
    
    vdesc = (vdesc + 1); 

    if (vdesc = 3) 
  {
      vdesc3 = 0;
     vdesc3 = ((vdinheiro / 100) * 10);
      vdesc3 = (vdinheiro - vdesc3);
  }
      
  else { vboxb = vboxb > 2;
    vdesc3 = ((vdinheiro / 100) * 15);
    vdesc3 = (vdinheiro - vdesc3);
  }
  (validate.cxdesconto.value) = vdesc3;




}



  





  








function cabeleleilo(){
    
    document.getElementById("cabelo").src="img/cabelo.jpeg";
    setTimeout("cabeleleilo1()",2000);
    }
    function cabeleleilo1(){
        document.getElementById("cabelo").src="img/cabelo1.jpeg";
        setTimeout("cabeleleilo2()",2000);
        
    }
    function cabeleleilo2(){
        document.getElementById("cabelo").src="img/cabelo2.jpeg";
        setTimeout("cabeleleilo()",2000);
        
    
    }

    
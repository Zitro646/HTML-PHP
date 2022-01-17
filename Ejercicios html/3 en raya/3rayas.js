function funcion1() {
    
    if (document.getElementById('n1').value=='Circulo' || document.getElementById('n1').value=='Cruz' ){
        
    }else{
        
        if (document.getElementById('0').value=="Circulo"){
            document.getElementById('1').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n1').value='Cruz';
        }else{
          document.getElementById('1').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n1').value='Circulo';

    }
    }
    Victoria();   
}
function funcion2() {
    
     if (document.getElementById('n2').value=='Circulo' || document.getElementById('n2').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
             document.getElementById('2').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n2').value='Cruz';

        }else{
          document.getElementById('2').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n2').value='Circulo';

    }
    }
    Victoria();
     
}
function funcion3() {
    
  if (document.getElementById('n3').value=='Circulo' || document.getElementById('n3').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
             document.getElementById('3').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n3').value='Cruz';

        }else{
          document.getElementById('3').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n3').value='Circulo';

    }
    }
     Victoria();

     
}
function funcion4() {
    
     if (document.getElementById('n4').value=='Circulo' || document.getElementById('n4').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
             document.getElementById('4').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n4').value='Cruz';

        }else{
          document.getElementById('4').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
            document.getElementById('n4').value='Circulo';

    }
    }
    Victoria();

     
}
function funcion5() {
    
 if (document.getElementById('n5').value=='Circulo' || document.getElementById('n5').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
             document.getElementById('5').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n5').value='Cruz';

        }else{
          document.getElementById('5').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n5').value='Circulo';

    }
    }
    Victoria();

}
function funcion6() {
    
 if (document.getElementById('n6').value=='Circulo' || document.getElementById('n6').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
            document.getElementById('6').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n6').value='Cruz';

        }else{
          document.getElementById('6').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n6').value='Circulo';


    }
    }
    Victoria();

}
function funcion7() {
    
 if (document.getElementById('n7').value=='Circulo' || document.getElementById('n7').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
            document.getElementById('7').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n7').value='Cruz';

        }else{
          document.getElementById('7').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n7').value='Circulo';

    }
    }
    Victoria();

}
function funcion8() {
    
 if (document.getElementById('n8').value=='Circulo' || document.getElementById('n8').value=='Cruz' ){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
            document.getElementById('8').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n8').value='Cruz';

        }else{
          document.getElementById('8').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n8').value='Circulo';


    }
    }
    Victoria();

}
function funcion9() {
    
 if (document.getElementById('n9').value=='Circulo' || document.getElementById('n9').value=='Cruz'){
        
    }else{
        if (document.getElementById('0').value=="Circulo"){
            document.getElementById('9').src='Cruz.jpg';
            document.getElementById('0').value='Cruz';
            document.getElementById('n9').value='Cruz';

        }else{
          document.getElementById('9').src='Circulo.jpg';  
          document.getElementById('0').value='Circulo';
          document.getElementById('n9').value='Circulo';

    }
    }
    Victoria();
}



function Victoria(){
    
    
    if(document.getElementById('n1').value=='Circulo' && document.getElementById('n2').value=='Circulo' && document.getElementById('n3').value=='Circulo' ){
        document.getElementById('CV').value='Cow';
    }
    else if(document.getElementById('n1').value=='Circulo' && document.getElementById('n4').value=='Circulo' && document.getElementById('n7').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if(document.getElementById('n1').value=='Circulo' && document.getElementById('n5').value=='Circulo' && document.getElementById('n9').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if (document.getElementById('n3').value=='Circulo' && document.getElementById('n5').value=='Circulo' && document.getElementById('n7').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if (document.getElementById('n4').value=='Circulo' && document.getElementById('n5').value=='Circulo' && document.getElementById('n6').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if (document.getElementById('n2').value=='Circulo' && document.getElementById('n5').value=='Circulo' && document.getElementById('n8').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if (document.getElementById('n7').value=='Circulo' && document.getElementById('n8').value=='Circulo' && document.getElementById('n9').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if (document.getElementById('n3').value=='Circulo' && document.getElementById('n6').value=='Circulo' && document.getElementById('n9').value=='Circulo'){
        document.getElementById('CV').value='Cow';
    }
    else if(document.getElementById('n1').value=='Cruz' && document.getElementById('n2').value=='Cruz' && document.getElementById('n3').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if(document.getElementById('n1').value=='Cruz' && document.getElementById('n4').value=='Cruz' && document.getElementById('n7').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if(document.getElementById('n1').value=='Cruz' && document.getElementById('n5').value=='Cruz' && document.getElementById('n9').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n2').value=='Cruz' && document.getElementById('n5').value=='Cruz' && document.getElementById('n8').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n4').value=='Cruz' && document.getElementById('n5').value=='Cruz' && document.getElementById('n6').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n3').value=='Cruz' && document.getElementById('n5').value=='Cruz' && document.getElementById('n7').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n7').value=='Cruz' && document.getElementById('n8').value=='Cruz' && document.getElementById('n9').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n3').value=='Cruz' && document.getElementById('n6').value=='Cruz' && document.getElementById('n9').value=='Cruz'){
        document.getElementById('CV').value='Czw';
    }
    else if (document.getElementById('n1').value!='0' && document.getElementById('n2').value!='0' && document.getElementById('n3').value!='0' && document.getElementById('n4').value!='0' && document.getElementById('n5').value!='0' && document.getElementById('n6').value!='0' && document.getElementById('n7').value!='0' && document.getElementById('n8').value!='0' && document.getElementById('n9').value!='0'){
        document.getElementById('CV').value='Draw';
    }
    
    
    if (document.getElementById('CV').value=='Czw'){
        alert('Las Cruzes ganan');
        NulificarCruz();
    }
    else if(document.getElementById('CV').value=='Cow'){
        alert('Los Circulos ganan');
        NulificarCirculo();
    }
    else if(document.getElementById('CV').value=='Draw'){
        alert('Empate');
        Nulificar()
    }
           
}
function NulificarCruz(){
    document.getElementById('n1').value='Cruz'
    document.getElementById('n2').value='Cruz'
    document.getElementById('n3').value='Cruz'
    document.getElementById('n4').value='Cruz'
    document.getElementById('n5').value='Cruz'
    document.getElementById('n6').value='Cruz'
    document.getElementById('n7').value='Cruz'
    document.getElementById('n8').value='Cruz'
    document.getElementById('n9').value='Cruz' 
}
function NulificarCirculo(){
    document.getElementById('n1').value='Circulo'
    document.getElementById('n2').value='Circulo'
    document.getElementById('n3').value='Circulo'
    document.getElementById('n4').value='Circulo'
    document.getElementById('n5').value='Circulo'
    document.getElementById('n6').value='Circulo'
    document.getElementById('n7').value='Circulo'
    document.getElementById('n8').value='Circulo'
    document.getElementById('n9').value='Circulo' 
}
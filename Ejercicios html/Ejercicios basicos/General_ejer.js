function ej1() {
    
     var num = parseInt(document.getElementById("bx1").value);
    
    if( num % 2==0){
        alert('El numero es PAR');
    }
    else{
        alert('El numero es IMPAR');
    }
    
}
function ej2() {
    
    if(document.getElementById('bx2').value=='1'){
        alert('El mes es Enero');
    }else if(document.getElementById('bx2').value=='2'){
        alert('El mes es Febrero');
    }else if(document.getElementById('bx2').value=='3'){
       alert('El mes es Marzo');
    }else if(document.getElementById('bx2').value=='4'){
        alert('El mes es Abril');
    }else if(document.getElementById('bx2').value=='5'){
        alert('El mes es Mayo');
    }else if(document.getElementById('bx2').value=='6'){
        alert('El mes es Junio');
    }else if(document.getElementById('bx2').value=='7'){
        alert('El mes es Julio');
    }else if(document.getElementById('bx2').value=='8'){
        alert('El mes es Agosto');
    }else if(document.getElementById('bx2').value=='9'){
        alert('El mes es Septiembre');
    }else if(document.getElementById('bx2').value=='10'){
        alert('El mes es Octubre');
    }else if(document.getElementById('bx2').value=='11'){
        alert('El mes es Noviembre');
    }else if(document.getElementById('bx2').value=='12'){
        alert('El mes es Diciembre');
    }else if(document.getElementById('bx2').value<='0'||document.getElementById('bx2').value>='13'){
        alert('Porfavor introduzca un numero entre el 1 y el 12');
    }
    
  
}

function ej3(){
    
         var num1 = parseInt(document.getElementById("bx3.1").value);
         var num2 = parseInt(document.getElementById("bx3.2").value);
         var num3 = parseInt(document.getElementById("bx3.3").value);
         var ord = [num1,num2,num3];
         var n=1;
    
         for(c=0;c<3;c++){
            i=0;
                if(ord[c]>ord[n]){
                    i=ord[n];
                    ord[n]=ord[c];
                    ord[c]=i;
                }
             n++;
            }
            if(ord[0]>ord[1]){
                    i=ord[1];
                    ord[1]=ord[0];
                    ord[0]=i;}
         alert('El orden esta en '+ord);
}
    


function ej4() {
    
         var num1 = parseInt(document.getElementById("bx4.1").value);
         var num2 = parseInt(document.getElementById("bx4.2").value);
         var num3 = parseInt(document.getElementById("bx4.3").value);
         var num4 = parseInt(document.getElementById("bx4.4").value);
         var num5 = parseInt(document.getElementById("bx4.5").value);
         var num6 = parseInt(document.getElementById("bx4.6").value);   
         var num7 = parseInt(document.getElementById("bx4.7").value);
         var num8 = parseInt(document.getElementById("bx4.8").value);   
         var num9 = parseInt(document.getElementById("bx4.9").value);
         var num10 = parseInt(document.getElementById("bx4.10").value);
         var nummen = num1 ;
         var nummay = num1 ;
         var array = [ num1 , num2 , num3 , num4 , num5 , num6 , num7 , num8 , num9 , num10 ];
    
        for ( c = 0; c < 10 ; c++ ){
            
            if(nummen>array[c]){
                nummen = array[c];
            }
            if(nummay<array[c]){
                nummay = array[c];
            }
        }
    
    
            alert('El menor valor introducido es ' + nummen + ' y el numero mayor es ' + nummay);
 
}

function ej5() {
        
         var ant = parseInt(document.getElementById("bx5.1").value);
         var brt = parseInt(document.getElementById("bx5.2").value);
         var net = 0 ;
    
                if(ant<=3){
                    brt = brt * 1.03 ;
                }else if(ant<=5){
                    brt = brt * 1.05 ;
                }else if(ant<10){
                    brt = brt * 1.07 ;
                }else if(ant>=10){
                    brt = brt * 1.1 ;
                }
                
                if(brt>=15000){
                    net = brt * 0.84 ;
                }else{
                    net = brt * 0.9 ;
                }
    
            alert('Crobras '+brt+' brutos de los cuales recibes '+net+' netos');
    

}
function ej6() {
    
    for(c=1;c<=100;c++){
        
        document.write('_'+c);
    }
  
}

function ej7() {
    var num = parseInt(document.getElementById("bx7.1").value);
    
    for(n=0;n<num;n++ ){
        document.write('_*')
    }
        
}


function ej8() {
    var num1 = parseInt(document.getElementById("bx8.1").value);
    var num2 = parseInt(document.getElementById("bx8.2").value);
    var num3 = parseInt(document.getElementById("bx8.3").value);
    var num4 = parseInt(document.getElementById("bx8.4").value);
    var num5 = parseInt(document.getElementById("bx8.5").value);
    var num6 = parseInt(document.getElementById("bx8.6").value);
    var num7 = parseInt(document.getElementById("bx8.7").value);
    var num8 = parseInt(document.getElementById("bx8.8").value);
    var num9 = parseInt(document.getElementById("bx8.9").value);
    var num10 = parseInt(document.getElementById("bx8.10").value);
    
    var media = ((num1+num2+num3+num4+num5+num6+num7+num8+num9+num10)/10);
    
    alert('La media es '+media);
}

function ej9() {
    
    var num =1;
    var cont =0;
    var sum =0;
    do{
        
        num =prompt('Introduce un numero');
        
        if(num!=0){
            cont++;
            sum = parseFloat(sum) + parseFloat(num) ;
           }
        
    }while(num!=0);
        
    var med = parseFloat(sum)/parseFloat(cont);
            
        alert('La media es '+med);

    
    
}

function ej10() {
    
    for (c=2 ; c<=100 ; c++){
        if(c%2==0){
                    document.write('_'+c);
        }
    }   
}


function ej11() {
    
    var stot = 0;
    for (c=1;c<=100;c++){
        
        stot= stot + c ;
    }
    document.write('La suma de todos los numeros es '+stot);
    
}

function ej12() {
    
    var num = 0;
    var stot = 0;
    for (c=2;c<=100;c=c+2){
        
        num++;
        stot= stot + c ;
    }
    document.write('La suma de todos los numeros pares es de '+stot+ ' y se han empleado un total de '+num+' numeros');
    
}

function ej13() {
    
    var num = parseInt(document.getElementById("bx13.1").value);
    var fac = 1;
    
    if(num<0){
        alert('No se pueden poner numeros negativos en factoriales'); 
    }else if(num==0){
            alert('El factorial de '+num+' es 1');    
    }else{
        for (c=1;c<=num;c++){
            
            fac=parseFloat(fac)*parseFloat(c);
            
        }
        alert('El factorial de '+num+' es '+fac);
        
    }
    
}

function ej14() {
    
    var num =0;
    var num2 =0;
    var ntot=0;
    
            num =prompt('Introduce un numero');
            num2 =prompt('Introduce un numero');

    if(num==num2){
        do{
            num =prompt('Cambia un numero');
        }while(num==num2)
    }
    
    if(num<num2){
        for(c=num;c<=num2;c++){
            ntot=parseFloat(ntot)+parseFloat(c);
        }
    }else{
        for(c=num2;c<=num;c++){
            ntot=parseFloat(ntot)+parseFloat(c);
        }
    }
        
    alert('la suma total de los numeros es de '+ntot)
}

    function ej15() {
        
        var num=0;
        var ntot=0;
        for(c=0;c<=10;c++){
            num =prompt('Introduce un numero');
            ntot = parseFloat(ntot)+parseFloat(num);
        }
        ntot=parseFloat(ntot)/10;
        alert('La media es de '+ntot)

    }











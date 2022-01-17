function ej1(){
        
         var c =0;
         var n=100;
         var ord = new Array(100);
         
         for(c=0 ; c<100 ; c++){
             ord [c] = n ;
             n=n-1;
         }
    
        for(c=0;c<100;c++){
            document.write(ord[c]);
            document.write("<br>");
        }
          
}
    
function ej2(){
         var np=0;
         var c =0;
         var n=0;
         var prim = new Array(25);
         
         for(c=1 ; c<100 ; c++){
             
             var esprimo=false;
             
             for(n=1;n<c;n++){
                 
                 if(n % c == 0 ){
                     
                     prim[np]=n;
                     np++;
                     esprimo=true
                     
                 }
                 
                 if (esprimo==true){
                     n=c;
                 }
                 
             }
         }
        
        
            
            
            
        
    
        for(c=0;c<25;c++){
            document.write(prim[c]);
            document.write("<br>");
        }
          
}

function ej3() {
    
    var num1 = parseInt(document.getElementById("bx3.1").value);
    var num2 = parseInt(document.getElementById("bx3.2").value);
    var num3 = parseInt(document.getElementById("bx3.3").value);
    var num4 = parseInt(document.getElementById("bx3.4").value);
    var num5 = parseInt(document.getElementById("bx3.5").value);
    var num6 = parseInt(document.getElementById("bx3.6").value);
    var num7 = parseInt(document.getElementById("bx3.7").value);
    var num8 = parseInt(document.getElementById("bx3.8").value);
    var num9 = parseInt(document.getElementById("bx3.9").value);
    var num10 = parseInt(document.getElementById("bx3.10").value);
    
    var ord = new Array(num1,num2,num3,num4,num5,num6,num7,num8,num9,num10);
    
    
    for(var nv=0;nv<10;nv++){
    
    for(var n=0;n<10;n++){
        
            if(ord[n]>ord[n+1]){
            
                        var c = ord[n];
                        ord[n]=ord[n+1];
                        ord[n+1]=c;
            
            }
    }
    
    for (var n=9;n>=0;n--){
        
        if(ord[n]<ord[n-1]){
            
                        var c = ord[n];
                        ord[n]=ord[n-1];
                        ord[n-1]=c;
            
            }
        
    }
    
    
    }
    
                for(var c=0;c<10;c++){
                    document.write(ord[c]);
                    document.write("    ");
                }   
 }
    
    
    
    
 function ej4() {
    
    var num1 = parseInt(document.getElementById("bx4.1").value);
    var num2 = parseInt(document.getElementById("bx4.2").value);
    var num3 = parseInt(document.getElementById("bx4.3").value);
    var num4 = parseInt(document.getElementById("bx4.4").value);
    var num5 = parseInt(document.getElementById("bx4.5").value);   
    
     
    var arr1 = new Array(num1,num2,num3,num4,num5);
    var arr2 = new Array(5); 
    var arr3 = new Array(5); 
     
     
    for (var n=0;n<5;n++){
        
        arr2[n]=arr1[n]*2;
        
    } 
     
     for(var nv=0;nv<5;nv++){
         
         arr3[nv]=arr2[nv];
         
     }
     
     for(var nv=0;nv<10;nv++){
             for(var n=0;n<5;n++){
                     if(arr3[ n ]>arr3[n + 1]){
                         var c=arr3[ n ];
                         arr3[ n ]=arr3[n + 1];
                         arr3[n + 1]=c;
                     }
             }
              for(var n=4;n>=0;n--){
                     if(arr3[ n ]<arr3[n - 1]){
                         var c=arr3[ n ];
                         arr3[ n ]=arr3[n - 1];
                         arr3[n - 1]=c;
                     }
             }
     }
     
     for(var c=0;c<5;c++){
          document.write(arr3[c]);
          document.write("    ");
    }  
     
 }
    
    
 function ej5() {
 
     var num1 = parseInt(document.getElementById("bx5.1").value);
     
     var bus = new Array(20);
     
     var check=false;
     
     for(var n=0;n<20;n++){
         
         bus[n]=n+1;
         
         
     }
     
     for(var n=0;n<20;n++){
         
         if(num1==bus[n]){
             check=true;
             document.write("El numero esta en la posicion "+(n+1)+" del array");
         }
         
     }
     
     if(check=false){
         document.write("El numero no esta en el array");
     }
     
     
     
     
     
 }
    
    
    
    
    


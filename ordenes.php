<html>
    <head>
    </head>
    <body>
        <script type="text/javascript">
         
         function ordenar(Arrayordenar,pos1,pos2)
         {
             if(pos1==pos2){
                 return Arrayordenar;
             }
             var tmpVal = Arrayordenar[pos1];
             Arrayordenar[pos1]= Arrayordenar[pos2];
             Arrayordenar[pos2]= tmpVal;

             return Arrayordenar;

 }

         function ordenarseleccion(Arrayordenar)
         {
             var tamano=Arrayordenar.length;
             for (var temp=0; temp<tamano-1;temp++)
             {
                 var menor=temp;
                 for (var comprobar=temp+1; comprobar<tamano; comprobar++)
                 {
                     if (Arrayordenar[comprobar]<Arrayordenar[menor])
                     {
                         menor=comprobar;
                     }
                 }
                 ordenar(Arrayordenar,menor,temp)
        ;

             }
             return Arrayordenar;

         }
         var Arrayordenar=[1,2,7,4,3,2];
         console.log(ordenarseleccion(Arrayordenar));
         document.write(Arrayordenar);


        </script>
    </body>
</html>
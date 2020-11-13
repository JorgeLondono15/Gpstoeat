var inputs = document.getElementsByClassName("formulario__input"); //Estoy obteniendo todos los elementos con la clase formulario__input y los estoy almacenando en una variable "inputs" esto ya seria un arreglo
for(var i = 0;i < inputs.length; i++) { //va hacer un recorrido de acuerdo a la cantidad de elementos que hayan en (formulario__input)
   inputs[i].addEventListener('keyup', function() {   //Escuchar un evento, que cuando ya se termine de escribir va a evaluar o validar que el input este lleno
    if(this.value.length>=1)       //Si la cantidad de elementos es mayor o igual a uno selecciona al siguiente elemento y le agrega la clase fijar (la cual esta en css)
    this.nextElementSibling.classList.add('fijar');  //se pone clase fijar
    else {    
    this.nextElementSibling.classList.remove('fijar');  // si no es mayor a 1 entonces se le quita la clase fijar y se regresa
   }
});
}

document.getElementById("Sector").onchange=function(){
      var Sector=document.getElementById("Sector").value
      if(Sector=="1"){
         document.getElementById("comidas").innerHTML="<option value='4' >Palitos de Queso</option>\
         <option value='5' >Papas Fritas</option>\
         <option value='6' >Mandingas</option>"

      }
      else if (Sector=="2"){
          document.getElementById("comidas").innerHTML="<option value='4' >Palitos de Queso</option>\
          <option value='5' >Papas Fritas</option>\
          <option value='6' >Mandingas</option>"

}
else if (Sector=="3"){
   document.getElementById("comidas").innerHTML="<option value='4' >Palitos de Queso</option>\
   <option value='5' >Papas Fritas</option>\
   <option value='6' >Mandingas</option>"

}
else if (Sector=="4"){
   document.getElementById("comidas").innerHTML="<option value='5' >Papas Fritas</option>\
   <option value='6' >Mandingas</option>"

}
else if (Sector=="5"){
   document.getElementById("comidas").innerHTML="<option value='4' >Palitos de Queso</option>\
   <option value='5' >Papas Fritas</option>\
   <option value='6' >Mandingas</option>"

}
else if (Sector=="6"){
   document.getElementById("comidas").innerHTML="<option value='4' >Palitos de Queso</option>\
   <option value='5' >Papas Fritas</option>\
   <option value='6' >Mandingas</option>"

}
}

document.getElementById("boton").onclick=function(){
   var restaurante= document.getElementById("comidas").value
   if(restaurante=="3"){
      window.location.replace("Local3.HTML")
      }


   }




<html>
<head>
   <title>Calculadora</title
<style type="text/css">
    
</style>
<style type="text/css">
.calc{
   height: 250px;
   width: auto;
}
.calc strong{
   margin-top: 10px;
   font-size: 15px;
}

.calc form fieldset {
   margin: 10px auto 10px auto;
   width: 90%;
   border: solid black 1px;
   padding: 3%;
}

.calc form legend {
   padding: 6px;
   margin: 10px;
   border: solid black 1px;
   font-size: 90%;
   font-weight: bold;
   background-color: #e8e8e8;
}

.calc form label {
   display: block;
   font-size: 11px;
}

.calc form input {
   width: 100%;
   border: solid #ccc 1px;
   font-size: 11px;
   margin-bottom: 10px;
}

.calc form input.botao {
   display: block;
   width: auto;
   float: right;
}
.btn{
   padding: 5px;
   font-size: 15px;
   border: 1px solid red;
}
.display{
   display: none;
}

</style>



</head>
<body>
<div class="calc">
   
      <fieldset>
         <legend>Calculadora</legend>
   
         
         <input type="text" name="valor1" id="valor1" />
   
         
         <input type="text" name="valor2" id="valor2" /><br>
   
         bom dia
         <input type="text" name="res" id="res" />
           
            <input type="radio" class="display" name="oper" value="somar" id="+"/><label class="btn" for="+" >+</label>
            <input type="radio" class="display" name="oper" value="subtrair" id="-"/><label class="btn" for="-">-</label>
            <input type="radio" class="display" name="oper" value="multiplicar" id="*"/><label class="btn" for="*">*</label>
            <input type="radio" class="display" name="oper" value="dividir" id="/"/><label class="btn" for="/">/</label>
         
   
         
   
         <input type="button" value="Calcular" class="botao" onClick="calcular(document.calcform.oper.value)"/>
      </fieldset>
    
</div>

<script type="text/javascript">
function calcular(oper) {
   var valor1 = document.calcform.valor1.value;
   var valor2 = document.calcform.valor2.value;

   if (oper == "somar") {
      var res = parseInt(valor1) + parseInt(valor2);
   } else {
      if (oper == "subtrair") {
         var res = valor1-valor2;
      } else {
         if (oper == "multiplicar") {
            var res = valor1*valor2;
         } else {
            var res = valor1/valor2;
         }
      }
   }

   document.calcform.res.value = res;
}
</script>
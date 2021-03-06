
 var count = 15

async function next (){
    
  var response = await fetch("../../../../backend/api/enredo/read.php") 
     dados = await response.json()
   

  var txt =document.getElementById("txt")
  txt.innerHTML = dados[count].frase


  var img = document.getElementById("personagemImg")
  var caminho = `../img/character/${dados[count].personagem}`
  img.src= caminho
  console.log(caminho)

  var fundo = document.getElementById("fundo")
  if (count == 15){
    fundo.style.backgroundImage = "url('../img/background/bg2.jpg')";
  }else if (count == 5){
      fundo.style.backgroundImage = "url('../img/background/bg4.jpg')";
    } else if (count ==20){
      fundo.style.backgroundImage = "url('../img/background/bg3.jpg')";
    } 
    

  count ++
  console.log(count)

    if(count == 18){
      /////////////////Logica de criação do form da imagem
      var divImg = document.getElementById("divImg")

      var formImg = document.createElement('form');
        formImg.setAttribute("method", "POST")
        formImg.setAttribute("enctype", "multipart/form-data")
        formImg.setAttribute("action", "../../../../backend/api/mural/creat.php")
        formImg.setAttribute("id", "formImg")

      divImg.appendChild(formImg)

      ////////////////Logica de criação do input da imagem
      var formularioImg = document.getElementById("formImg")

      var inputImg = document.createElement('input');
        inputImg.setAttribute("type", "file")
        inputImg.setAttribute("name", "arquivo")
        inputImg.setAttribute("required", "TRUE")
      //////////////// Logica criação do Botão de enviar
      var inputImgSalvar = document.createElement('input');
        inputImgSalvar.setAttribute("type", "submit")
        inputImgSalvar.setAttribute("value", "salvar")
        inputImgSalvar.setAttribute("class", "btn btn-info")        

      formularioImg.appendChild(inputImg)
      formularioImg.appendChild(inputImgSalvar)

      /////////////Remover o botão next
      var btnNext = document.getElementById("prox")
      btnNext.remove()

    }







}
var contador = 0
 function mute () {
  var turn = document.getElementById("turn")
  var mute = document.getElementById("mudo")
   if (contador == 0){
      mute.pause()
      contador = 1
      turn.innerHTML = "Ligar Música"
   }
   else {
     mute.play()
     contador = 0
     turn.innerHTML = "Desligar Música"
   } 
}

function btnsound(){
  var btnsound = document.getElementById("btnsound")
  btnsound.play()
}
  
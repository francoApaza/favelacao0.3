
async function get(){
   var response =  await fetch("http://localhost/favelacao/backend/api/user/read.php")
   dados = await response.json()
   console.log(dados)

   
   var nome = document.getElementById("nome")
   var idade = document.getElementById("idade")
   var email = document.getElementById("email")
   var apelido = document.getElementById("apelido")
   nome.innerHTML = dados[0].nome
   idade.innerHTML = dados[0].dataNascimento
   email.innerHTML = dados[0].email
   apelido.innerHTML = dados[0].apelido
   
   console.log(nome)
   console.log(idade)
   console.log(email)
   console.log(apelido)
   
}


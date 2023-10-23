
// 1 fazer a validacao do formulario com expressao regex.
const Form = document.getElementById("Form");

Form.addEventListener("submit", function(e){
    e.preventDefault()
    const name = document.getElementById("username")
    const email = document.getElementById("email")
    const data = document.getElementById("date")
    const phone = document.getElementById("cel-contato")


    switch (true) {
        case name.value === "":
            alert("Preencha seu nome!");
            break;
        case email.value === "":
            alert("Preencha seu email!");
                 const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(emailRegex.test(email)){
                console.log("E-mail valido")
            }else{
                console.log("email invalido")
            }
            break;
        case data.value === "":
            alert("Preencha sua Data de nascimento");
            break;
        case phone.value === "":
            alert("Informe seu telefone!");
            if(phone.value <= 12){
                    console.log("tamanho de numero de contato nao aceito!")
            }
         break;
        default:
            this.submit(); 
            alert("Formulário enviado com sucesso!");
          
    }    
});

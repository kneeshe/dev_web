function valida_entrada() { //função para validar os dados inseridos pelo usuario
  const nome = document.getElementById("nome").value; //valida o nome 
  const email = document.getElementById("email").value; //valida o email 
  const comentario = document.getElementById("comentario").value; //valida o comentario 
  const genero = document.forms["form_inscricao"]["genero"]; //valida os elementos do radio 
  const oferta = document.forms["form_inscricao"]["oferta"]; //mesmo caso citado acima 

  let erro_nome = document.getElementById("erro_nome"); //referencia a tag span no html. vai servir para retornar a mensagem de erro 
  let erro_email = document.getElementById("erro_email");
  let erro_comentario = document.getElementById("erro_comentario");
  //  let erro_genero = document.getElementById("erro_genero");
  //  let erro_oferta = document.getElementById("erro_oferta");

  //erro_nome.textContent = ""; //associa a variavel acima com o valor de texto vazio
  //erro_email.textContent = "";
  //erro_comentario.textContent = "";
  //  erro_genero.textContent = "";
  //  erro_oferta.textContent = "";

  let entrada_valida = true; //cria uma variavel para garantir que tudo esteja 'true' ao final do processo - se algo estiver errado, se torna 'false'

  if (nome === "" || /\d/.test(nome)) { //valida se a entrada de nome é válida 
    //erro_nome.textContent = "Por favor, entre com um nome válido";
    alert("Nome não pode ser vazio"); //se o nome for vazio ou numero ou simbolo, retorna mensagem de erro 
    return false; //transforma a variavel em false
  }

  if (email === "" || !email.includes("@")) { //valida se o email esta digitado nos moldes corretos 
    //erro_email.textContent = "Por favor, entre com um email válido";
    alert("Digite um email válido");
    return false;
  }

  if (comentario === "") { //verifica se a caixa de comentarios esta vazia
    //erro_comentario.textContent = "Por favor, insira um comentário";
    alert("Comentário não pode ser vazio");
    return false;
  }

  if(!(genero[0].checked === true || genero[1].checked === true)) { //verifica se alguma das opções de genero foi escolhida
      //erro_genero.textContent = "Por favor, selecione um genero";
      alert("Seleção de genero não pode ser vazio");
      entrada_valida = false;    
  }
  
    if(!(oferta[0].checked === true || oferta[1].checked === true)) { //verifica se alguma das opções de oferta foi escolhida 
      //erro_oferta.textContent = "Por favor, selecione a oferta";
      alert("Seleção de oferta não pode ser vazia");
      entrada_valida = false;
  }

  return true; //retorna a variavel true
}
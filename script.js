function valida_entrada() { //função para validar os dados inseridos pelo usuario
  const nome = document.getElementById("nome").value; //valida o nome 
  const email = document.getElementById("email").value; //valida o email 
  const comentario = document.getElementById("comentario").value; //valida o comentario 
//  const genero = document.getElementsByName("genero"); //valida os elementos do radio 
//  const oferta = document.getElementsByName("oferta"); //mesmo caso citado acima 

  let erro_nome = document.getElementById("erro_nome"); //referencia a tag span no html. vai servir para retornar a mensagem de erro 
  let erro_email = document.getElementById("erro_email");
  let erro_comentario = document.getElementById("erro_comentario");
//  let erro_genero = document.getElementById("erro_genero");
//  let erro_oferta = document.getElementById("erro_oferta");

  erro_nome.textContent = ""; //associa a variavel acima com o valor de texto vazio
  erro_email.textContent = "";
  erro_comentario.textContent = "";
//  erro_genero.textContent = "";
//  erro_oferta.textContent = "";

  let entrada_valida = true; //cria uma variavel para garantir que tudo esteja 'true' ao final do processo - se algo estiver errado, se torna 'false'

  if(nome === "" || /\d/.test(nome)) { //valida se a entrada de nome é válida 
    erro_nome.textContent = "Por favor, entre com um nome válido"; //se o nome for vazio ou numero ou simbolo, retorna mensagem de erro 
    entrada_valida = false; //transforma a variavel em false
}

  if(email === "" || !email.includes("@")) { //valida se o email esta digitado nos moldes corretos 
    erro_email.textContent = "Por favor, entre com um email válido";
    entrada_valida = false;
}

  if(comentario === "") { //verifica se a caixa de comentarios esta vazia
    erro_comentario.textContent = "Por favor, insira um comentário";
    entrada_valida = false;
}

/*  if(genero[0].checked === false || genero[1].checked === false) { //verifica se alguma das opções de genero foi escolhida
    erro_genero.textContent = "Por favor, selecione um genero";
    entrada_valida = false;    
}

  if(oferta[0].checked === false || oferta[1].checked === false) { //verifica se alguma das opções de oferta foi escolhida 
    erro_oferta.textContent = "Por favor, selecione a oferta";
    entrada_valida = false;
*/}

  return entrada_valida; //retorna a variavel true

}

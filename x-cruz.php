<?php
  //Definindo a classe
  class Desenho{
    public string $desenho;

    public function __construct(string $desenho) {
      $this->desenho = $desenho;
      
    }

    public function mostrarDesenho() {
        echo $this->desenho;
    }
  }

  //Variaveis
  $apresentacao = "Olá, \nEscolha uma das opções abaixo para serem escritas no console: \n1 - Cruz \n2 - X\n3 - Sair\n\n";
  $cruz = "...*...\n.*****.\n...*...\n...*...\n...*...\n";
  $x = "*...*\n.*.*.\n..*..\n.*.*.\n*...*\n";
  
  //Criando Objetos
  $xObjeto = new Desenho($x);
  $cruzObjeto = new Desenho($cruz);

  //Funcao para ler o console
  function ler(){
    return readline("Digite uma opção: ");
  }


  //Funcao app
  function app($textoApresentacao, $cruzObjeto, $xObjeto){
    //Apresentar as opções de saída x ou cruz
    echo ($textoApresentacao);

    //Escrever na saida a opção escolhida 
    do{
      //Ler a entrada do que foi digitado
      $resposta = ler();
      switch($resposta){
        case 1:
          $cruzObjeto->mostrarDesenho();
          break;
        case 2: 
          $xObjeto->mostrarDesenho();
          break;
        }
    }while($resposta != "3");

  }
  app($apresentacao, $cruzObjeto, $xObjeto)
// ?>

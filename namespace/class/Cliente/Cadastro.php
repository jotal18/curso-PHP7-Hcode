<?php

namespace Cliente;

class Cadastro extends \Cadastro{

	public function registrarVenda(){

		echo "Venda efetuada para o cliente " . $this->getNome();

	}

}

?>
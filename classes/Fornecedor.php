<?php
/**
 * 
 */
class Fornecedor
{
	private $nome;
	private $senha;

	function __construct()
	{}

	public function create($nome, $senha)
	{
		$this->nome = $nome;
		$this->senha = $senha;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}
}
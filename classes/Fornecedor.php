<?php
	class Fornecedor implements JsonSerializable
	{
		private $nome;
		private $nome_fantasia;
		private $cod_tipo_pessoa;
		private $endereco;
		private $complemento;
		private $cod_bairro;
		private $cod_uf;
		private $cod_cidade;
		private $cod_pais;
		private $cep;
		private $fone1;
		private $fone2;
		private $ramal1;
		private $ramal2;
		private $tel0800;
		private $contato1;
		private $contato2;
		private $email1;
		private $email2;
		private $cpf_cnpj;
		private $insc_estadual;
		private $obs;
		private $numero;
		private $sala_loja;
		private $home_page;
		private $ddd;
		private $ddi;
		private $data_cadastro;
		private $data_alteracao;
		private $servicos;
		private $cod_funcionario;
		private $imp;
		private $foto;
		private $limite_credito;
		private $proprietario;
		private $usuario;
		private $acesso_permitido;
		private $senha;
		private $agencia;
		private $conta;
		private $banco;
		private $operacao_preferencial;
		private $pis;
		private $cnh;
		private $nome_mae;
		private $data_nascimento;
		private $bloqueado_pgto;

		function __construct()
		{}

		public function create($usuario, $acesso_permitido, $senha)
		{
			$this->usuario = $usuario;
			$this->acesso_permitido = $acesso_permitido;
			$this->senha = $senha;
		}

		public function getNome()
		{
			 return $this->nome;
		}

		public function setNome($nome)
		{
			 $this->nome = $nome;
		}

		public function getNomeFantasia()
		{
			 return $this->nome_fantasia;
		}

		public function setNomeFantasia($nome_fantasia)
		{
			 $this->nome_fantasia = $nome_fantasia;
		}

		public function getCodTipoPessoa()
		{
			return $this->cod_tipo_pessoa;
		}

		public function setCodTipoPessoa($cod_tipo_pessoa)
		{
			$this->cod_tipo_pessoa = $cod_tipo_pessoa;
		}

		public function getEndereco()
		{
			 return $this->endereco;
		}

		public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}

		public function getComplemento()
		{
			return $this->complemento;
		}

		public function setComplemento($complemento)
		{
			$this->complemento = $complemento;
		}


		public function getCodBairro()
		{
			return $this->cod_bairro;
		}		

		public function setCodBairro($cod_bairro)
		{
			$this->cod_bairro = $cod_bairro;
		}

		public function getCodUf()
		{
			return $this->cod_uf;
		}

		public function setCodUf($cod_uf)
		{
			$this->cod_uf = $cod_uf;
		}
		
		public function getCodCidade()
		{
			return $this->cod_cidade;
		}

		public function setCodCidade($cod_cidade)
		{
			$this->cod_cidade = $cod_cidade;
		}
		
		public function getCodPais()
		{
			return $this->cod_pais;
		}

		public function setCodPais($cod_pais)
		{
			$this->cod_pais = $cod_pais;
		}

		public function getCep()
		{
			return $this->cep;
		}

		public function setCep($cep)
		{
			$this->cep = $cep;
		}
		
		public function getFone1()
		{
			return $this->fone1;
		}

		public function setFone1($fone1)
		{
			$this->fone1 = $fone1;
		}

		public function getFone2()
		{
			return $this->fone2;
		}

		public function setFone2($fone2)
		{
			$this->fone2 = $fone2;
		}

		public function getRamal1()
		{
			return $this->ramal1;
		}

		public function setRamal1($ramal1)
		{
			$this->ramal1 = $ramal1;
		}

		public function getRamal2()
		{
			return $this->ramal2;
		}

		public function setRamal2($ramal2)
		{
			$this->ramal2 = $ramal2;
		}

		public function getTel0800()
		{
			return $this->tel0800;
		}

		public function setTel0800($tel0800)
		{
			$this->tel0800 = $tel0800;
		}
		
		public function getContato1()
		{
			return $this->contato1;
		}

		public function setContato1($contato1)
		{
			$this->contato1 = $contato1;
		}

		public function getContato2()
		{
			return $this->contato2;
		}

		public function setContato2($contato2)
		{
			$this->contato2 = $contato2;
		}

		public function getEmail1()
		{
			return $this->email1;
		}

		public function setEmail1($email1)
		{
			$this->email1 = $email1;
		}

		public function getEmail2()
		{
			return $this->email2;
		}

		public function setEmail2($email2)
		{
			$this->email2 = $email2;
		}

		public function getCpfCnpj()
		{
			return $this->cpf_cnpj;
		}

		public function setCpfCnpj($cpf_cnpj)
		{
			$this->cpf_cnpj = $cpf_cnpj;
		}

		public function getInscEstadual()
		{
			return $this->insc_estadual;
		}

		public function setInscEstadual($insc_estadual)
		{
			$this->insc_estadual = $insc_estadual;
		}
		
		public function getObs()
		{
			return $this->obs;
		}

		public function setObs($obs)
		{
			$this->obs = $obs;
		}

		public function getNumero()
		{
			return $this->numero;
		}

		public function setNumero($numero)
		{
			$this->numero = $numero;
		}

		public function getSalaLoja()
		{
			return $this->sala_loja;
		}
		
		public function setSalaLoja($sala_loja)
		{
			$this->sala_loja = $sala_loja;
		}

		public function getHomePage()
		{
			return $this->home_page;
		}
	
		public function setHomePage($home_page)
		{
			$this->home_page = $home_page;
		}

		public function getDdd()
		{
			return $this->ddd;
		}

		public function setDdd($ddd)
		{
			$this->ddd = $ddd;
		}

		public function getDdi()
		{
			return $this->ddi;
		}
		
		public function setDdi($ddi)
		{
			$this->ddi = $ddi;
		}
		
		public function getDataCadastro()
		{
			return $this->data_cadastro;
		}

		public function setDataCadastro($data_cadastro)
		{
			$this->data_cadastro = $data_cadastro;
		}

		public function getDataAlteracao()
		{
			return $this->data_alteracao;
		}

		public function setDataAlteracao($data_alteracao)
		{
			$this->data_alteracao = $data_alteracao;
		}		
		
		public function getServicos()
		{
			return $this->servicos;
		}

		public function setServicos($servicos)
		{
			$this->servicos = $servicos;
		}

		public function getCodFuncionario()
		{
			return $this->cod_funcionario;
		}

		public function setCodFuncionario($cod_funcionario)
		{
			$this->cod_funcionario = $cod_funcionario;
		}
		
		public function getImp()
		{
			return $this->imp;
		}

		public function setImp($imp)
		{
			$this->imp = $imp;
		}
		
		public function getFoto()
		{
			return $this->foto;
		}

		public function setFoto($imp)
		{
			$this->foto = $foto;
		}

		public function getLimiteCredito()
		{
			return $this->limite_credito;
		}

		public function setLimiteCredito($limite_credito)
		{
			$this->limite_credito = $limite_credito;
		}

		public function getProprietario()
		{
			return $this->proprietario;
		}

		public function setProprietario($proprietario)
		{
			$this->proprietario = $proprietario;
		}

		public function getUsuario()
		{
			return $this->usuario;
		}

		public function setUsuario($usuario)
		{
			$this->usuario = $usuario;
		}

		public function getAcessoPermitido()
		{
			return $this->acesso_permitido;
		}

		public function setAcessoPermitido($acesso_permitido)
		{
			$this->acesso_permitido = $acesso_permitido;
		}

		public function getSenha()
		{
			return $this->senha;
		}

		public function setSenha($senha)
		{
			$this->senha = $senha;
		}

		public function getAgencia()
		{
			return $this->agencia;
		}

		public function setAgencia($agencia)
		{
			$this->agencia = $agencia;
		}

		public function getConta()
		{
			return $this->conta;
		}

		public function setConta($conta)
		{
			$this->conta = $conta;
		}

		public function getBanco()
		{
			return $this->banco;
		}

		public function setBanco($banco)
		{
			$this->banco = $banco;
		}
		
		public function getOperacaoPreferencial()
		{
			return $this->operacao_preferencial;
		}

		public function setOperacaoPreferencial($operacao_preferencial)
		{
			$this->operacao_preferencial = $operacao_preferencial;
		}
		
		public function getPis()
		{
			return $this->pis;
		}

		public function setPis($pis)
		{
			$this->pis = $pis;
		}
		
		public function getCnh()
		{
			return $this->cnh;
		}

		public function setCnh($cnh)
		{
			$this->cnh = $cnh;
		}
		
		public function getNomeMae()
		{
			return $this->nome_mae;
		}

		public function setNomeMae($nome_mae)
		{
			$this->nome_mae = $nome_mae;
		}

		public function getDataNascimento()
		{
			return $this->data_nascimento;
		}

		public function setDataNascimento($data_nascimento)
		{
			$this->data_nascimento = $data_nascimento;
		}
		
		public function getBloqueadoPgto()
		{
			return $this->bloqueado_pgto;
		}
		
		public function setBloqueadoPgto($bloqueado_pgto)
		{
			$this->bloqueado_pgto = $bloqueado_pgto;
		}

		public function jsonSerialize()
    	{
    		$arr = array(
				'nome' => $this->getNome(),
				'nome_fantasia' => $this->getNomeFantasia(),
				'cod_tipo_pessoa' => $this->getCodTipoPessoa(),
				'endereco' => $this->getEndereco(),
				'complemento' => $this->getComplemento(),
				'cod_bairro' => $this->getCodBairro(),
				'cod_uf' => $this->getCodUf(),
				'cod_cidade' => $this->getCodCidade(),
				'cod_pais' => $this->getCodPais(),
				'cep' => $this->getCep(),
				'fone1' => $this->getFone1(),
				'fone2' => $this->getFone2(),
				'ramal1' => $this->getRamal1(),
				'ramal2' => $this->getRamal2(),
				'tel0800' => $this->getTel0800(),
				'contato1' => $this->getContato1(),
				'contato2' => $this->getContato2(),
				'email1' => $this->getEmail1(),
				'email2' => $this->getEmail2(),
				'cpf_cnpj' => $this->getCpfCnpj(),
				'insc_estadual' => $this->getInscEstadual(),
				'obs' => $this->getObs(),
				'numero' => $this->getNumero(),
				'sala_loja' => $this->getSalaLoja(),
				'home_page' => $this->getHomePage(),
				'ddd' => $this->getDdd(),
				'ddi' => $this->getDdi(),
				'data_cadastro' => $this->getDataCadastro(),
				'data_alteracao' => $this->getDataAlteracao(),
				'servicos' => $this->getServicos(),
				'cod_funcionario' => $this->getCodFuncionario(),
				'imp' => $this->getImp(),
				'foto' => $this->getFoto(),
				'limite_credito' => $this->getLimiteCredito(),
				'proprietario' => $this->getProprietario(),
				'usuario' => $this->getUsuario(),
				'acesso_permitido' => $this->getAcessoPermitido(),
				'senha' => $this->getSenha(),
				'agencia' => $this->getAgencia(),
				'conta' => $this->getConta(),
				'banco' => $this->getBanco(),
				'operacao_preferencial' => $this->getOperacaoPreferencial(),
				'pis' => $this->getPis(),
				'cnh' => $this->getCnh(),
				'nome_mae' => $this->getNomeMae(),
				'data_nascimento' => $this->getDataNascimento(),
				'bloqueado_pgto' => $this->getBloqueadoPgto(),
    		);

    		return $arr;
    	} 
	}
?>
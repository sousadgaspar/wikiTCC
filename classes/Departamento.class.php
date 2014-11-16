<?php
	/**
	*
	*CLASSE: DEPARTAMENTO
	*
	*@codDepartamento int 	- codigo do Departamento
	*@nome string 	- nome do Departamento
	*
	*fucntion criarDepartamento / cria um novo Departamento no banco de dados
	*/

	class Departamento{

		//propriedades
		private $departamento;
		private $codDepartamento;

		//SETTERS
		public function setDepartamento($Departamento){
				$this->departamento = htmlspecialchars($Departamento);
		}


		//GETTES
		public function getDepartamento(){
			return $this->departamento;
		}

		public function getCodDepartamento(){
			return $this->codDepartamento;
		}


		/*
		*
		*
		*METODOS DO NEGOCIO
		*
		*
		*/

		public function criarDepartamento($nomeDepartamento){
			$this->setDepartamento($nomeDepartamento);

			//abre nova conexao
			$conn = new Conexao;

			try{
				//seta o SQL
				$conn->setSql("insert into tb_departamento(codDepartamento, nome) values('', \"$this->departamento\")");
				}
			catch(PDOException $erro){
					print "Erro ao criar novo Departamento". $erro->getLine();
			}
		}
	}
?>
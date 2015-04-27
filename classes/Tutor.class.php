<?php
	/**
	*
	*CLASSE: Tutor
	*
	*@codTutor int 	- codigo do Tutor
	*@nome string 	- nome do Tutor
	*@nivelAcademico - nivel academico do tutor
	*
	*fucntion criarTutor / cria um novo Tutor no banco de dados
	*/

	class Tutor{

		//propriedades
		private $tutor;
		private $nivelAcademico;
		private $codTutor;

		//SETTERS
		public function setTutor($Tutor){
				$this->tutor = htmlspecialchars($Tutor);
		}

		public function setNivelAcademico($nivelAcademico){
				$this->nivelAcademico = htmlspecialchars($nivelAcademico);
		}


		//GETTES
		public function getTutor(){
			return $this->tutor;
		}

		public function getNivelAcademico(){
			return $this->nivelAcademico;
		}

		public function getCodTutor(){
			return $this->codTutor;
		}


		/*
		*
		*
		*METODOS DO NEGOCIO
		*
		*
		*/

		public function criarTutor($nomeTutor, $nivelAcademico){
			$this->setTutor($nomeTutor);
			$this->setNivelAcademico($nivelAcademico);

			//abre nova conexao
			$conn = new Conexao;

			try{
				//seta o SQL
				$conn->setSql("insert into tb_tutor(codTutor, nome, nAcademico) values('', \"$this->tutor\", \"$this->nivelAcademico\")");
				}
			catch(PDOException $erro){
					print "Erro ao criar novo Tutor". $erro->getLine();
			}
		}
	}
?>
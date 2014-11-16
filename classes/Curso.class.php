<?php
	/**
	*
	*CLASSE: CURSO
	*
	*@codCurso int 	- codigo do curso
	*@nome string 	- nome do curso
	*
	*fucntion criarCurso / cria um novo curso no banco de dados
	*/

	class Curso{

		//propriedades
		private $curso;
		private $codCurso;

		//SETTERS
		public function setCurso($curso){
				$this->curso = htmlspecialchars($curso);
		}


		//GETTES
		public function getCurso(){
			return $this->curso;
		}

		public function getCodCurso(){
			return $this->codCurso;
		}


		/*
		*
		*
		*METODOS DO NEGOCIO
		*
		*
		*/

		public function criarCurso($nomeCurso){
			$this->setCurso($nomeCurso);

			//abre nova conexao
			$conn = new Conexao;

			try{
				//seta o SQL
				$conn->setSql("insert into tb_curso(codCurso, nome) values('', \"$this->curso\")");
				}
			catch(PDOException $erro){
					print "Erro ao criar novo curso". $erro->getLine();
			}
		}
	}
?>
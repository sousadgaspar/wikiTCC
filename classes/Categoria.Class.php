
<?php
	/**
	*
	*CLASSE: Categoria
	*Classe referente ao tipo de funcionario que o sistema suporta.
	*
	*@codCategoria int - codigo da categoria
	*@categoria String - Nome da categoria
	*
	*function getAll() - retorna todas as categorias do banco de dados
	*
	*/


	/*
	*
	*
	*ATENÇÃO: ESTA CLASSE DEPENDE DE UMA BIBLIOTECA DE CONEXAO
	*
	*
	*/
	//INCLUI BIBLIOTECA DE CONEXAO
	require_once('Conexao.class.php');

	class Categoria{
		private $codCategoria;
		private $categoria;

		//SETTERS
		public function setCodCategoria($cod){
			$this->codCategoria = (int) $cod;
		}

		public function setCategoria($categoria){
			$this->categoria = (string) $categoria;
		}

		//GETTERS
		public function getCodCategoria(){
			return $codCategoria;
		}

		public function getCategoria(){
			return $categoria;
		}

		//METODOS DO NEGOCIO
		public function getAll(){
			try{
				//nova conexao
				$conn = new Conexao;

				//set SQL
				$conn->setSQL("SELECT * FROM tb_categoria ORDER BY categoria LIMIT 2");

				//consulta
				$res = $conn->consultar();

				return $res;
			}
			catch(PDOException $e){
				print "Nao foi possivel retornar as categorias do sistema!". $e->getLine();
			}
		}
	}



?>
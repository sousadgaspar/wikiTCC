<?php 
	/*
	*
	* 	TUTOR.DAO
	*	database datas for Tutor class
	*
	*/

	###################################################
	#			Depends of Conexion class   		  #
	###################################################
	require_once 'Conexao.class.php';

	class TutorDao {
		//insert
		public function insert($nome, $nivelAcademico){
			//nova conexao
			$conn = new Conexao();
			$sql = "insert into tb_tutor(nome, nivelAcademico) values (\"$nome\", \"$nivelAcademico\");";

			$conn->setSql($sql);

			(is_null($conn->executar()))? true: false;
		}

		//update
		public function update($id){
			//nova conexao
			$conn = new Conexao();
			$sql = "update tb_tutor set nome = \"$nome\", nivelAcademico = \"$nivelAcademico\" where codTutor = \"$id\";";

			$conn->setSql($sql);

			(is_null($conn->executar()))? true: false;
		}

		//delete
		public function delete($id){

		}

		//get
		public function get($id){

		}

		//getAll
		public function getAll(){

		}
	}


 ?>
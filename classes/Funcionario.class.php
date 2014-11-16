<?php
	/**
	*
	*CLASS: FUNCIONARIO
	*
	*@codDepartamento
	*
	*Function cadastrarFuncionario()
	*
	*/
	/*Inclui a classe usuario*/
	require_once('Aluno.class.php');

	class Funcionario extends Aluno{
				private codDepartamento;


				//SETTERS
				public function setCodDepartamento($codDepartamento){
						$this->codDepartamento = (int) $codDepartamento;
				}

				//GETTERS
				public function getCodDepartamento(){
					return $this->codDepartamento;
				}



				/*
				*
				*FUNCOES DO NEGOCIO
				*
				*/

				//cadastrar novo funcionario
				public function cadastrarFuncionario(){

				}

				//actualizar dados functionario
				public function actualizarDados{
					
				}
	}
?>
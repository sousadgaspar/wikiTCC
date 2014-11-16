<?php
	/**
	*
	*CLASSE: Aluno
	*Classe que abstrai todas as caracteristicas e funcoes da entidade ALUNO do sistem
	*
	*@nome String - nome do aluno
	*@nMatricula Int - Numero de matricula do estudante
	*@dataNascimento Date - Dada de nascimento do aluno
	*@codCurso Int - codigo do curso do estudante
	*@perido String - Periodo que o estudante frequentou
	*
	*function pesquisarMonografia() - pesquisa de monografia no sistema
	*function cadastrarAluno() - Cadastra-se no sistema
	*function actualizarDados() - actualizar dados do aluno
	*
	*/


	/*
	*
	*
	*ATENÇÃO: ESTA CLASSE DEPENDE DE UMA BIBLIOTECA DE COXAO
	*
	*
	*/
	//INCLUI BIBLIOTECA DE CONEXAO
	require_once('Conexao.class.php');



	class Aluno{
				//propriedades 
				private $nome;
				private $nMatricula;
				private $dataNascimento;
				private $sexo;
				private $codCurso;
				private $periodo;


				/*
				*
				*
				*	SETTERS
				*
				*/
				public function setNome($nome){
						$this->nome = htmlspecialchars($nome);
				}

				public function setNMatricula($nMatricula){
						$this->nMatricula = (int) $nMatricula;
				}

				public function setDataNascimento($dataNascimento){
						$this->dataNascimento = htmlspecialchars($dataNascimento);

				}

				public function setSexo($sexo){
						$n = strlen($sexo);
						if($n == 1){
							$this->sexo = htmlspecialchars($sexo);
						}
						else{
							$this->sexo = 'M';
						}	
				}

				public function setCodCurso($codCurso){
						$this->codCurso = (int) $codCurso;
				}


				public function setPeriodo($periodo){
						$this->periodo = htmlspecialchars($periodo);

				}


				//getters
				public function getNome(){
						return $this->nome;
				}

				public function getNMatricula(){
					return $this->nMatricula;
				}

				public function getDataNascimento(){
					return $this->dataNascimento;
				}

				public function getSexo(){
					return $this->sexo;
				}

				public function getCodCurso(){
					return $this->codCurso;
				}

				public function getPeriodo(){
					return $this->periodo;
				}



				/*
				*
				*
				* METODOS DO NEGOCIO
				*
				*
				*/


				/*
				*
				* CADASTRARALUNO()
				*@nome
				*@nMatricula
				*@dataNascimento
				*@codCurso
				*@periodo
				*
				*/
				final public function cadastrarAluno($nome, $nMatricula, $dataNascimento, $codCurso, $periodo){
					//trata os dados vindos do usuario
					$this->setNome($nome);
					$this->nMatricula($nMatricula);
					$this->dataNascimento($dataNascimento);
					$this->codCurso($codCurso);
					$this->periodo($periodo);


					//abre a conexao
					$conn = new Conexao; 

					$conn->setSql("INSERT INTO tb_usuario(
															codUsuario, 
															numerio, 
															dataNascimento, 
															sexo, 
															codCategoria, 
															codCurso, 
															codDepartamento, 
															periodo 
														) VALUES (	'', 
																	$this->nMatricula,  
																	\"$this->dataNascimento\",  
																	\"$this->sexo\", 
																	3, 
																	$this->codCurso, 
																	'', 
																	\"$this->periodo\")"
					);
					try{
						$conn->executar();
					catch(PDOException $erro){
						print "Erro ao tentar inserir aluno no banco de dados". $erro->getLine();
					}

				}


				//actualizarDados()
				public function actualizarDados($nome, $nMatricula, $codCurso, $periodo){
						//trata os dados provenientes do usuario
						$this->setNome($nome);
						$this->setNMatricula($nMatricula);
						$this->setCodCurso($codCurso);
						$this->setPeriodo();


						//abre uma conexao
						$conn = new Conexao;

						//seta o sql aque vai realizar a actualizacao
						$conn->setSql("UPDATE 'tb_usuario' 
												SET('nome'		= \"$this->nome\",
													'codCurso' 	= $this->codCurso,
													'periodo'	= \"$this->periodo\"
													) WHERE numerio = $this->nMatricula"
						);
						try{
							//executa o sql
							$conn->executar
						}
						catch(PDOException $erro){
							print "Lamento, não foi possivel actualizar os dados do estudante! :(";
						}

				}

				//pesquisarMonografia
				public function pesquisarMonografia(){

				}


				//retorna uma mensagem caso a propriedade nao exista
				public function __call($metodo, $parametros){
					print "O método $this->$metodo que você chamou não existe! ";
					if(isset($parametros)){
						print 'Parametros: ';
						foreach($parametros as $parametro){
							print 'parametros: '.$parametro.' ';
							}
						}
					}


	}
?>
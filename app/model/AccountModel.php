<?php

namespace app\model;

use app\core\Model;

/**
 * Classe responsável por gerenciar a conexão com a tabela produto.
 */
class AccountModel
{

    //Instância da classe model
    private $pdo;

    /**
     * Método construtor
     *
     * @return void
     */
    public function __construct()
    {
        $this->pdo = new Model();
    }

    /**
     * Insere um novo registro na tabela de produtos e retorna seu ID em caso de sucesso
     *
     * @param  Object $params Lista com os parâmetros a serem inseridos
     * @return int Retorna o ID do produto inserido ou -1 em caso de erro
     */
    public function insert(object $params)
    {
        $sql = 'INSERT INTO users (username, password,role,estado,dataInscrito,carteira,email) VALUES (:username, :password,4,1,now(),:carteira,:email)';

        $new_password = password_hash($params->password,PASSWORD_DEFAULT);

        $carteira = "wallet_".rand(1000,100000);
        $params = [

            ':username'    => $params->username,
            ':password' => $new_password,
            ':carteira' => $carteira,
            ':email' => $params->contacto
        ];

        if (!$this->pdo->executeNonQuery($sql, $params))
            return -1; //Código de erro

        return $this->pdo->getLastID();
    }

    /**
     * Atualiza um registro na base de dados através do ID do user
     *
     * @param  Object $params Lista com os parâmetros a serem inseridos
     * @return bool True em caso de sucesso e false em caso de erro
     */
    public function update(object $params,$id)
    {
        $sql = 'UPDATE users SET pnome = :pnome, unome = :unome,morada =:morada,bio =:bio,identificacao =:identificacao WHERE idUser = :idUser';
        
//var_dump($params);
        
        $params = [
            ':idUser'        => $id,
            ':pnome'      => $params->pnome,
            ':unome'      => $params->unome,
            ':morada'      => $params->morada,
            ':bio'      => $params->bio,
            ':identificacao'      => $params->bi
            
        ];

        return $this->pdo->executeNonQuery($sql, $params);
    }


    public function updateSettings(object $params,$id)
    {
        $sql = 'UPDATE users SET pnome = :pnome, unome = :unome,morada =:morada,bio =:bio,identificacao =:identificacao, pais=:pais,telefone=:telefone,email=:email  WHERE idUser = :idUser';
        
//var_dump($params);
        
        $params = [
            ':idUser'        => $id,
            ':pnome'      => $params->pnome,
            ':unome'      => $params->unome,
            ':morada'      => $params->morada,
            ':bio'      => $params->bio,
            ':identificacao'      => $params->identificacao,
            ':pais'      => $params->pais,
            ':telefone'      => $params->telefone,
            ':email'      => $params->email,
            
        ];

        return $this->pdo->executeNonQuery($sql, $params);
    }

    /**
     * Retorna todos os registros da base de dados em ordem ascendente por nome
     *
     * @return arra[object]
     */
    public function getAll()
    {
        //Excrevemos a consulta SQL e atribuimos a váriavel $sql
        $sql = 'SELECT * FROM users';

        //Executamos a consulta chamando o método da modelo. Atribuimos o resultado a variável $dr
        $dt = $this->pdo->executeQuery($sql);

        //Declara uma lista inicialmente nula
        $listaProduto = null;

        //Percorremos todas as linhas do resultado da busca
        foreach ($dt as $dr)
            //Atribuimos a última posição do array o produto devidamente tratado
            $listaProduto[] = $this->collection($dr);

        //Retornamos a lista de produtos
        return $listaProduto;
    }


    
    /**
     * Retorna um único registro da base de dados através do ID informado
     *
     * @param  int $id ID do objeto a ser retornado
     * @return object Retorna um objeto populado com os dados do produto ou se não encontrar com seus valores nulos
     */
    public function getById(int $id)
    {
        $sql = 'SELECT u.idUser,u.username,u.password,u.pnome,u.unome,u.morada,u.identificacao,u.bio,u.telefone,u.email,c.name as pais FROM users as u inner join country as c on u.pais = c.country_id WHERE u.idUser = :idUser';

        $param = [
            ':idUser' => $id
        ];

        $dr = $this->pdo->executeQueryOneRow($sql, $param);

        return $this->collection($dr);
    }

    /**
     * Converte uma estrutura de array vinda da base de dados em um objeto devidamente tratado
     *
     * @param  array|object $param Revebe o parâmetro que é retornado na consulta com a base de dados
     * @return object Retorna um objeto devidamente tratado com a estrutura de produtos
     */
    private function collection($param)
    {
        return (object)[
            'idUser'        => $param['idUser']        ?? null,
            'pnome'      => $param['pnome']      ?? null,
            'unome'      => $param['unome']      ?? null,
            'username'      => $param['username']      ?? null,
            'identificacao'    => $param['identificacao']    ?? null,
            'morada'    => $param['morada']    ?? null,
            'bio' => $param['bio'] ?? null,
            'telefone' => $param['telefone'] ?? null,
            'email' => $param['email'] ?? null,
            'pais' => $param['pais'] ?? null,
            'password' => $param['password'] ?? null,
        ];
    }
}

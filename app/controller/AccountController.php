<?php

namespace app\controller;

use app\core\Controller;
use app\model\AccountModel;
use app\model\CardModel;
use app\model\CountryModel;
use app\classes\Input;
use app\functions\GenerateCard;

class AccountController extends Controller
{

    //Instância da classe ProdutoModel
    private $accountModel;
    private $CardModel;
    private $CountryModel;

    /**
     * Método construtor
     *
     * @return void
     */
    public function __construct()
    {
        session_start();
       
        $this->accountModel = new AccountModel();
        $this->CardModel = new CardModel();
        $this->CountryModel = new CountryModel();
    }

    /**
     * Carrega a página principal
     *
     * @return void
     */
    public function index()
    {
        $this->load('account/main');
    }

    /**
     * Carrega a página com o formulário para cadastrar um novo produto
     *
     * @return void
     */
    public function novo()
    {
        $this->load('account/novo');
    }

    public function insert()
    {
        $perfil = $this->getInput();

        
        if (!$this->validate($perfil, false)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . 'register/',
                422
            );
        }

        $result = $this->accountModel->insert($perfil);

        if ($result <= 0) {
            echo 'Erro ao cadastrar nova conta';
            die();
        }

       
        $_SESSION['userID'] = $result;
        $user = $this->accountModel->getById($result);
        redirect(BASE . 'account/completar-perfil');
       
     
    }



    //update info

    public function completar()
    {
        $perfil = $this->getInput();

        //var_dump($perfil);
        $result = $this->accountModel->update($perfil,$_SESSION['userID']);  
        redirect(BASE . 'account/dashboard');
    }

    public function updateSettings(){
        $perfil = $this->getInputUpdate();

        var_dump($perfil);
        $result = $this->accountModel->updateSettings($perfil,$_SESSION['userID']);  
        redirect(BASE . 'account/profile');

    }

    public function profile()
    {
        
        $user = $this->accountModel->getById($_SESSION['userID']);
        //var_dump($user);
        $this->load('account/profile',[
            'info' => $user
        ]); 
    }


    public function dashboard()
    {
        
        $user = $this->accountModel->getById($_SESSION['userID']);
        $card = $this->CardModel->getById($_SESSION['userID']);
        //var_dump($card);
        //$numero = GenerateCard::gCard();
        $csv = GenerateCard::gPin();
        var_dump(date('Y'));
        $this->load('account/dashboard',[
            'info' => $user,
            'cards'  => $card
        ]); 
    }

    

    public function login()
    {
        $this->load('account/login');
    }


    public function register()
    {
        $this->load('account/register');
    }

    /**
     * Realiza a busca na base de dados e exibe na página de resultados
     *
     * @return void
     */
    public function pesquisar()
    {
        $param = Input::get('pes');

        $this->load('produto/pesquisa', [
            'termo' => $param
        ]);
    }

    public function editar()
    {
       $user = $this->accountModel->getById($_SESSION['userID']);
 
        //var_dump($user);
        $this->load('account/editar', [
            'user'  => $user,
            'perfil'  => 'testee',
        ]);
    }

    /**
     * Retorna os dados do formulário em uma classe padrão stdObject
     *
     * @return object
     */
    private function getInput()
    {

        return (object)[
            'pnome'      => Input::post('pnome'),
            'unome'      => Input::post('unome'),
            'username'      => Input::post('txtUsername'),
            'contacto'      => Input::post('txtContacto'),
            'password'      => Input::post('txtPassword'),
            'morada'      => Input::post('morada'),
            'bio'      => Input::post('bio'),
            'bi'      => Input::post('bi'),
        ];
    }

    private function getInputUpdate()
    {

        return (object)[
            
            'pnome'      => Input::post('pnome'),
            'unome'      => Input::post('unome'),
            'username'      => Input::post('username'),
            'pais'      => Input::post('pais'),
            'morada'      => Input::post('morada'),
            'telefone'      => Input::post('telefone'),
            'email'      => Input::post('email'),
            'bio'      => Input::post('bio'),
            'identificacao'      => Input::post('identificacao'),
            
            
        ];
    }

    /**
     * Valida se os campos recebidos estão válidos
     *
     * @param  Object $produto
     * @param  bool $validateId
     * @return bool
     */
    private function validate(Object $perfil, bool $validateId = true)
    {
        if ($validateId && $perfil->id <= 0)
            return false;


        if (strlen($perfil->username) < 3)
            return false;

        if (strlen($perfil->contacto) < 3)
            return false;

        if (strlen($perfil->password) < 2)
            return false;

        return true;
    }


    public function generate(){

        $numero = GenerateCard::gCard();
    }

    public function settings()
    {
        $user = $this->accountModel->getById($_SESSION['userID']);
        $paises = $this->CountryModel->getCountry();


        //var_dump($paises);
        $this->load('account/settings',[
            'info' => $user,
            'paises' => $paises
        ]); 
    }
}

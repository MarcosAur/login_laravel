<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Retorno padrão quando a rota é acessada pelo metodo GET
    function index(){
        return view("tela-login");
    }

    //Retorno padrão quando o cadastro é bem sucedido
    function index_cadastro(){
        echo "<script> alert('Cadastro bem sucedido') </script>";
        return view("tela-login");
    }

    //Retorno padrão quando o formulário for enviado, retornando via post e fazendo a validação.
    function validarLogin(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $host = "localhost";
        $user = "teste";
        $dn_name = "sistema_login";
        $passwd = "1234";

        $conn = mysqli_connect($host,$user,$passwd,$dn_name);
        $sql_query = "SELECT *
                      FROM usuario
                      WHERE email = '$email' AND senha = '$senha';";

        $result = mysqli_query($conn, $sql_query);
        $rows = mysqli_num_rows($result);
        
        if($rows == 0){ 
        /* 
        Caso rows seja igual a 0, não há nenhum registro no bd com esses dados, logo não acessará o sistema
        ele será deixado na mesma página.
        */
            echo "<script> alert('Login mal sucedido') </script>";
            return view("tela-login");
        }else{
            return redirect()->route("welcome");
        }
        
    }

}

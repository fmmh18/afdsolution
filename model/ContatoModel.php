<?php

include_once "Conexao.php";

class ContatoModel extends Conexao
{
    public function salvar($data)
    {
        $sql = "INSERT INTO contato(nome,email,telefone,assunto,mensagem,data,status) VALUES (:nome,:email,:telefone,:assunto,:mensagem,:data,:status)";
        $statement = Conexao::prepare($sql);
        $statement->bindValue('nome',  $data['nome']);
        $statement->bindValue('email', $data['email']);
        $statement->bindValue('telefone' , $data['telefone']);
        $statement->bindValue('assunto' , $data['assunto']);
        $statement->bindValue('mensagem' , $data['mensagem']);
        $statement->bindValue('data' , date('Y-m-d H:i:s'));
        $statement->bindValue('status' , 1);
        return $statement->execute();
    }

}
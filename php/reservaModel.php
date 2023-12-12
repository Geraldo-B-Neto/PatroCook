<?php

require_once "Conexao.php";
require_once "Reserva.php";

class reservaModel
{

    public $tabela = "reserva";

    public function create(Reserva $c)
    {
        try {

            $sql = "insert into $this->tabela (nome, telefone, data, descricao)  
                values (?, ?, ?, ?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getTelefone());
            $stmt->bindValue(3, $c->getData());
            $stmt->bindValue(4, $c->getDescricao());

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            //throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Reserva');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Reserva');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Reserva $c)
    {
        try {
            $sql = "update $this->tabela set nome=?, telefone=?, data=?, descricao=? where id=?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getTelefone());
            $stmt->bindValue(3, $c->getData());
            $stmt->bindValue(4, $c->getDescricao());
            $stmt->bindValue(5, $c->getId());

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            //throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    }
    /* public function delete($mesa)
    {
        try {
            $sql = "delete from $this->tabela where mesa=?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $mesa);

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    } */
}

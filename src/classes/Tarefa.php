<?php

class Tarefa
{
    private $id;
    private $status;
    private $nome;
    private $descricao;
    private $dataLimite;
    private $imgUrl;

    public function __construct(int $status, string $nome, string $descricao, string $dataLimite, string $imgUrl = '')
    {
       $this->status = $status;
       $this->nome   = $nome;
       $this->descricao = $descricao;
       $this->dataLimite = $dataLimite;
       $this->imgUrl = (empty($imgUrl) ? 'https://via.placeholder.com/400x200' : $imgUrl);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDataLimite()
    {
        return $this->dataLimite;
    }

    public function setDataLimite(string $dataLimite)
    {
       $this->dataLimite = $dataLimite;
    }

    public function setImgUrl(string $imgUrl)
    {
        $this->imgUrl = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    public function legenda()
    {
        if ($this->status)
        {
            return 'Em Aberto';
        }
        else
        {
            return 'Encerrado';
        }
    }

}

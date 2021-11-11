<?php declare(strict_types=1);

namespace App\UseCases\Dtos;

use App\UseCases\Dtos\DtoInterface;

class DeveloperDto implements DtoInterface
{
    
    private string  $nome;
    private string  $sexo;
    private int     $idade;
    private string  $hobby;
    private string  $datanascimento;
    
    public function __construct(array $dados)
    {
        $this->nome             = (string) $dados["nome"];
        $this->sexo             = (string) $dados["sexo"];
        $this->idade            = $dados["idade"];
        $this->hobby            = (string) $dados["hobby"];
        $this->datanascimento   = date("Y-m-d", strtotime($dados["datanascimento"]));
    }

    /**
     * 
     * @return array
     */
    public function getDatas() : array
    {
        return [
            "nome"              => $this->nome,
            "sexo"              => $this->sexo,
            "idade"             => $this->idade,
            "hobby"             => $this->hobby,
            "datanascimento"    => $this->datanascimento
        ];
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Get the value of hobby
     */ 
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Get the value of datanascimento
     */ 
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }
}
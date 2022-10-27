<?php

class Request
{
    
    private string $xml;
    private string $cnpj;
    private string $uf;
    private string $type;

    public function __construct(string $xml, string $cnpj, string $uf, string $type)
    {
        $this->xml = $xml;
        $this->cnpj = $cnpj;
        $this->uf = $uf;
        $this->type = $type;
    }

    public function getXml()
    {
        return $this->xml;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function getType()
    {
        return $this->type;
    }
}
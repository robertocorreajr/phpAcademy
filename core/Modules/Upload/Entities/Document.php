<?php

class Document
{
    private string $cnpj;
    private string $uf;
    private string $type;
    private string $accessKey;

    public function __construct(string $cnpj, string $uf, string $type, string $accessKey)
    {
        $this->cnpj = $cnpj;
        $this->uf = $uf;
        $this->type = $type;
        $this->accessKey = $accessKey;
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

    public function getAccessKey()
    {
        return $this->accessKey;
    }
}

?>
<!-- 
document
■ id
■ cnpj
■ uf
■ type
■ access_key
■ status (error, success)
■ created_at
■ updated_at -->
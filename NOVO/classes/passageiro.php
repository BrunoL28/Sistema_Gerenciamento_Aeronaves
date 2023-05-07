<?php

require_once('identificadores.php');
require_once('nacionalidades.php');

namespace MyApp;

use DateTime;
use DocumentoPassageiro;
use CPF;
use Email;
use Nacionalidade;

class Passageiro{

    public string $nome;
    public string $sobrenome;
    public DocumentoPassageiro $documento;
    public string $nacionalidade;
    public ?CPF $cpf;
    public DateTime $data_de_nascimento;
    public Email $email;
    public array $passagens;
    public bool $vip;

    public function __construct(
        string $nome,
        string $sobrenome,
        DocumentoPassageiro $documento,
        string $nacionalidade,
        ?CPF $cpf,
        DateTime $data_de_nascimento,
        Email $email,
        array $passagens,
        bool $vip
    )
    {
        parent::__construct(
            nome: $nome,
            sobrenome: $sobrenome,
            documento: $documento,
            nacionalidade: $nacionalidade,
            cpf: $cpf,
            data_de_nascimento: $data_de_nascimento,
            email: $email,
            passagens: $passagens,
            vip: $vip
        );
    }

    public function valida_cpf_se_brasileiro($cpf, $values) {
        if ($values['nacionalidade'] == Nacionalidade::BRASIL && $cpf === null) {
            throw new \Exception('O CPF deve ser definido para brasileiros');
        }
        if ($values['nacionalidade'] != Nacionalidade::BRASIL && $cpf !== null) {
            throw new \Exception('O CPF deve ser definido somente para brasileiros');
        }
        return $cpf;
    }

}

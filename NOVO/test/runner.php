<?php
require_once "endereco.php";
require_once "identificadores.php";
require_once "suite.php";
require_once "suite_test.php";
require_once "temporal.php";

(new TestRunner())
    // Inicio endereco.php
    ->addCase(new EnderecoTestCase())
    // Fim identificadores.php
    // Inicio identificadores.php
    ->addCase(new GeradorDeRegistroNumericoTestCase())
    ->addCase(new SiglaCompanhiaAereaTestCase())
    ->addCase(new CodigoVooTestCase())
    ->addCase(new RegistroDeAeronaveTestCase())
    ->addCase(new RegistroDePassagemTestCase())
    ->addCase(new RegistroDeViagemTestCase())
    ->addCase(new SiglaAeroportoTestCase())
    ->addCase(new RegistroDeTripulanteTestCase())
    ->addCase(new GeradorDeRegistroDeTripulanteTestCase())
    ->addCase(new RGTestCase())
    ->addCase(new PassaporteTestCase())
    ->addCase(new DocumentoPassageiroTestCase())
    ->addCase(new GeradorDeRegistroDeViagemTestCase())
    ->addCase(new GeradorDeRegistroDePassagemTestCase())
    ->addCase(new ClasseTestCase())
    ->addCase(new CodigoDoAssentoTestCase())
    ->addCase(new GeradorDeCodigoDoAssentoTestCase())
    ->addCase(new EmailTestCase())
    ->addCase(new CPFTestCase())
    ->addCase(new CEPTestCase())
    // Fim identificadores.php
    // Inicio suite_test.php
    ->addCase(new TestSuiteTestCase())
    // Fim suite_test.php
    // Inicio temporal.php
    ->addCase(new DuracaoTestCase())
    ->addCase(new TempoTestCase())
    ->addCase(new DataTestCase())
    ->addCase(new DataTempoTestCase())
    ->addCase(new IntervaloDeTempoTestCase())
    // Fim temporal.php
    ->addCase(new PassageiroTestCase())
    ->addCase(new AssentoTestCase())
    // Inicio ProgramaDeMilhagem.php
    ->addCase(new ProgramaDeMilhagemTestCase())
    // Fim ProgramaDeMilhagem.php
    // Inicio Tripulacao.php
    ->addCase(new TripulacaoTestCase())
    // Fim Tripulacao.php
    // Inicio PassageiroVip.php
    ->addCase(new PassageiroVipTestCase())
    // Fim PassageiroVip.php
    ->setCheckShowPolicy(CheckShowPolicy::FAILURE)
    ->run();

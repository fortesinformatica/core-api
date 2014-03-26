<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/Entidade.php';

/**
 * Description of Participante
 *
 * @author geanribeiro
 */
class Participante extends Entidade{
    public $ParticipanteId;
    public $CPFCNPJ;
    public $Logradouro;
    public $Numero;
    public $Bairro;
    public $Municipio;
    public $CEP;
    public $Complemento;
    public $Telefone;
    public $Email;
    public $GerarConta;
    public $InformarContaMae;
    public $ContaMae;
    
    public function getParticipanteId() {
        return $this->ParticipanteId;
    }

    public function getCPFCNPJ() {
        return $this->CPFCNPJ;
    }

    public function getLogradouro() {
        return $this->Logradouro;
    }

    public function getNumero() {
        return $this->Numero;
    }

    public function getBairro() {
        return $this->Bairro;
    }

    public function getMunicipio() {
        return $this->Municipio;
    }

    public function getCEP() {
        return $this->CEP;
    }

    public function getComplemento() {
        return $this->Complemento;
    }

    public function getTelefone() {
        return $this->Telefone;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getGerarConta() {
        return $this->GerarConta;
    }

    public function getInformarContaMae() {
        return $this->InformarContaMae;
    }

    public function getContaMae() {
        return $this->ContaMae;
    }

    public function setParticipanteId($ParticipanteId) {
        $this->ParticipanteId = $ParticipanteId;
        return $this;
    }

    public function setCPFCNPJ($CPFCNPJ) {
        $this->CPFCNPJ = $CPFCNPJ;
        return $this;
    }

    public function setLogradouro($Logradouro) {
        $this->Logradouro = $Logradouro;
        return $this;
    }

    public function setNumero($Numero) {
        $this->Numero = $Numero;
        return $this;
    }

    public function setBairro($Bairro) {
        $this->Bairro = $Bairro;
        return $this;
    }

    public function setMunicipio(Municipio $Municipio = null) {
        $this->Municipio = $Municipio;
        return $this;
    }

    public function setCEP($CEP) {
        $this->CEP = $CEP;
        return $this;
    }

    public function setComplemento($Complemento) {
        $this->Complemento = $Complemento;
        return $this;
    }

    public function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
        return $this;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
        return $this;
    }

    public function setGerarConta($GerarConta) {
        $this->GerarConta = $GerarConta;
        return $this;
    }

    public function setInformarContaMae($InformarContaMae) {
        $this->InformarContaMae = $InformarContaMae;
        return $this;
    }

    public function setContaMae(Conta $ContaMae = null) {
        $this->ContaMae = $ContaMae;
        return $this;
    }
}
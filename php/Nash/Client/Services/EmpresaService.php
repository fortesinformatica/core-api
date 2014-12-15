<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaService
 *
 * @author elvislima
 */
class EmpresaService extends AbstractCrudService {
    public function entityName() {
        return "empresa";
    }

    public function entityClassName() {
        return "Empresa";
    }
    
    public function getEmpresasSelecionaveis($take, $skip, $query = "") {
        $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
        $url = "/SelecaoEmpresa/SelecaoDeEmpresa?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
        $url = str_replace("\"", "", $url);
        
        $result = $this->session->get($url);
        
        return $this->parseListResult($result);
    }
    
    public function selecionaEmpresa($empresaId) {
        $this->session->contentType = "application/json";
        $result = $this->session->post("/Home/SelecionaEmpresa", "{empresaId: $empresaId}");
        return $result;
    }
}

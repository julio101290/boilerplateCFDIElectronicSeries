<?php

namespace julio101290\boilerplateCFDIElectronicSeries\Models;

use CodeIgniter\Model;

class SeriesfacturaelectronicaModel extends Model {

    protected $table = 'seriesfacturaelectronica';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id'
        , 'idEmpresa'
        , 'sucursal'
        , 'tipoSerie'
        , 'serie'
        , 'desdeFecha'
        , 'hastaFecha'
        , 'desdeFolio'
        , 'hastaFolio'
        , 'ambienteTimbrado'
        , 'tokenPruebas'
        , 'tokenProduccion'
        , 'created_at'
        , 'updated_at'
        , 'deleted_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';
    protected $validationRules = [
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function mdlGetSeriesfacturaelectronica($idEmpresas) {
        $result = $this->db->table('seriesfacturaelectronica as a')
                ->select('a.id as id
                ,a.idEmpresa as idEmpresa
                ,a.sucursal as sucursal
                ,a.tipoSerie as tipoSerie
                ,a.serie as serie
                ,a.desdeFecha as desdeFecha
                ,a.hastaFecha as hastaFecha
                ,a.desdeFolio as desdeFolio
                ,a.hastaFolio as hastaFolio
                ,a.ambienteTimbrado as ambienteTimbrado
                ,a.tokenPruebas as tokenPruebas
                ,a.tokenProduccion as tokenProduccion
                ,a.created_at as created_at
                ,a.updated_at as updated_at
                ,a.deleted_at as deleted_at
                ,b.nombre as nombreEmpresa
                ,c.name as nombreSucursal')
                ->join('empresas as b', 'a.idEmpresa = b.id')
                ->join('branchoffices as c', 'a.sucursal = c.id')
                ->whereIn('a.idEmpresa', $idEmpresas);

        return $result;
    }
}

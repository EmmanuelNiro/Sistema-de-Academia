<?php

namespace App\Models;

use CodeIgniter\Model;

class ManualesM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'manuales';
    protected $primaryKey       = 'idManual';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idManual', 'titulo', 'autor', 'paginas', 'fechaCreacion'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

   /*public function get_nombre_docente($idPelicula) {
        return $this->db->table('pelicula')
                        ->select('nombre')
                        ->where('idPelicula', $idPelicula)
                        ->get()
                        ->getRow()->nombre ?? 'Desconocida';
    }
*/
}

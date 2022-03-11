<?php
namespace app\Models;
use CodeIgniter\Model;

class ClienteModel extends Model{
    protected $table = "cliente";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = "array";
    protected $allowedFields = ["nombre","apellido","email","dui"];
    protected $useTimeStamp = false;
    protected $validationRules = [];
    protected $validationMessages = [];

    protected $skipValidation = false;
    
}
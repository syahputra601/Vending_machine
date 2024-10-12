<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Vanding_model extends Model
{
    protected $table = 'food';

    //SAP
    public function getFood($food = false)
    {
        if($food === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['food' => $food]);
        }   
    }

    public function editFood($dataUpdate,$food)
    {
        $builder = $this->db->table($this->table);
        $builder->where('food', $food);
        return $builder->update($dataUpdate);
    }
 
}
<?php namespace App\Models;

use CodeIgniter\Model;

class transferServiceModel extends Model{

    protected $table = 'transferService';
    protected $primarykey = 'id_transferService';

    protected $allowedFields = [
        'car', 
        'name', 
        'emailAddress',
        'phoneNumber', 
        'numberPerson',
        'pickupDate',
        'pickupTime',
        'pickupLocation',
        'massage', 
    ];


}



?>
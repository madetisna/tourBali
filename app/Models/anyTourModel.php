<?php namespace App\Models;

use CodeIgniter\Model;

class anyTourModel extends Model{

    protected $table = 'anyTour';
    protected $primarykey = 'id_anyTour';

    protected $allowedFields = [
        'tour',
        'car', 
        'name', 
        'emailAddress',
        'phoneNumber', 
        'numberPerson',
        'startTour',
        'endTour',
        'pickupTime',
        'pickupLocation',
        'massage', 
    ];

}



?>
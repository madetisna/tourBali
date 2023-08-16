<?php namespace App\Models;

use CodeIgniter\Model;

class tour_bookingModel extends Model{

    protected $table = 'tour_idea';
    protected $primarykey = 'id_idea';

    protected $allowedFields = [
        'tour',
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
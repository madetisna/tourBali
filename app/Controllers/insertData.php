<?php

namespace App\Controllers;

use App\Models\anyTourModel;
use App\Models\tour_bookingModel;
use App\Models\transferServiceModel;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class InsertData extends Controller
{
    public function airportTransfer()
    {
        $email = \Config\Services::email();
        $request = \Config\Services::request();

        $emailTujuan = $request->getVar('emailAddress');
        $nama = $request->getVar('name');
        $car = $request->getVar('car');
        $phone = $request->getVar('phoneNumber');
        $person = $request->getVar('numberPerson');
        $date = $request->getVar('pickupDate');
        $time = $request->getVar('pickupTime');
        $location = $request->getVar('pickupLocation');
        $message = $request->getVar('massage');


        $email->setFrom('griyabalitrans@gmail.com', 'GRIYA BALI TRANS');
        $email->setTo('adhistaratisna@gmail.com');
        $email->setCC('griyabalitrans@gmail.com');
        $email->setSubject('BOOKING AIRPORT AND TRANSFER');
        $email->setMessage('name = ' . $nama . '<br>' . 'email:' . $emailTujuan . '<br>' . 'car =' . $car . '<br>' . 'phone = ' . $phone . '<br>' . 'Number Person:' . $person . '<br>' .
            'Pickup Date:' . $date . '<br>' . 'Pickup Time:' . $time . '<br>' . 'Pickup Location:' . $location . '<br>' . 'Message:' . $message);
        if ($email->send()) {
            return redirect()->to('/');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }

    public function anyTour()
    {
        $email = \Config\Services::email();
        $request = \Config\Services::request();

        $nama = $request->getVar('name');
        $emailTujuan = $request->getVar('emailAddress');
        $car = $request->getVar('car');
        $phone = $request->getVar('phoneNumber');
        $person = $request->getVar('numberPerson');
        $dateStart = $request->getVar('pickupDateStart');
        $dateEnd = $request->getVar('pickupDateEnd');
        $time = $request->getVar('pickupTime');
        $location = $request->getVar('pickupLocation');
        $message = $request->getVar('massage');


        $email->setFrom('griyabalitrans@gmail.com', 'GRIYA BALI TRANS');
        $email->setTo('adhistaratisna@gmail.com');
        $email->setCC('griyabalitrans@gmail.com');
        $email->setSubject('BOOKING TOUR ON REQUEST');
        $email->setMessage('name = ' . $nama . '<br>' . 'email: ' . $emailTujuan . '<br>' . 'car = ' . $car . '<br>' . 'phone or whatssapp= ' . $phone . '<br>' . 'Number Person: ' . $person . '<br>' .
            'Start Tour: ' . $dateStart . '<br>' . 'End Tour: '.$dateEnd . '<br>'. 'Pickup Time: ' . $time . '<br>' . 'Pickup Location: ' . $location . '<br>' . 'Message: ' . $message);
        if ($email->send()) {
            return redirect()->to('/tour/anytour');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }

    public function bookingTour(){
        $email = \Config\Services::email();
        $request = \Config\Services::request();

        $nama = $request->getVar('name');
        $emailTujuan = $request->getVar('emailAddress');
        $phone = $request->getVar('phoneNumber');
        $person = $request->getVar('numberPerson');
        $tour = $request->getVar('tourIdea');
        $dateStart = $request->getVar('pickupDateStart');
        $dateEnd = $request->getVar('pickupDateEnd');
        $time = $request->getVar('pickupTime');
        $location = $request->getVar('pickupLocation');
        $message = $request->getVar('massage');


        $email->setFrom('griyabalitrans@gmail.com', 'GRIYA BALI TRANS');
        $email->setTo('adhistaratisna@gmail.com');
        $email->setCC('griyabalitrans@gmail.com');
        $email->setSubject('BOOKING TOUR');
        $email->setMessage('name = ' . $nama . '<br>' . 'email: ' . $emailTujuan . '<br>'. 'phone or whatssapp= ' . $phone . '<br>' . 'Number Person: ' . $person . '<br>' . 'Tour Idea: '.$tour . '<br>'.
            'Start Tour: ' . $dateStart . '<br>' . 'End Tour: '.$dateEnd . '<br>'. 'Pickup Time: ' . $time . '<br>' . 'Pickup Location: ' . $location . '<br>' . 'Message: ' . $message);
        if ($email->send()) {
            return redirect()->to('/tour/tourPakages');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }
}

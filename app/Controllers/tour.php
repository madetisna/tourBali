<?php

namespace App\Controllers;

class tour extends BaseController
{
    public function aboutUs()
    {
        $data = [
            'title' => 'About US || Griya Bali Trans',
            'css' => 'about-us',
        ];
        return view ('mainService/about-us', $data);
    }

    public function contactUs()
    {
        $data = [
            'title' => 'Contact US || Griya Bali Trans',
            'css' => 'contact-us'
        ];
        return view('/mainService/contact-us', $data);
    }
    public function airportService()
    {
        $data = [
            'title' => 'Transfers Service || Griya Bali Trans',
            'css' => 'airport-service',
        ];
        return view('/mainService/airport-service', $data);
    }
    public function tourPakages()
    {
        $data = [
            'title' => 'Tour Ideas || Griya Bali Trans',
            'css' => 'tour_pakages'
        ];
        return view('/mainService/tour_pakages', $data);
    }

    public function ubudTour()
    {
        $data = [
            'title' => 'Ubud Tout Ideas || Griya Bali Trans',
            'css' => 'ubud-tour',
        ];
        return view('/tourIdeas/ubud-tour', $data);
    }
    public function southTour()
    {
        $data = [
            'title' => 'South Bali Tour Ideas || Griya Bali Trans',
            'css' => 'south-tour'
        ];
        return view('/tourIdeas/south-tour', $data);
    }
    public function eastTour()
    {
        $data = [
            'title' => 'East Bali Tour Ideas || Griya Bali Trans',
            'css' => 'east-tour',
        ];
        return view('/tourIdeas/east-tour', $data);
    }
    public function northTour()
    {
        $data = [
            'title' => 'Nort Bali Tour Ideas || Griya Bali Trans',
            'css' => 'north-tour',
        ];
        return view('/tourIdeas/north-tour', $data);
    }
    public function kintamaniTour()
    {
        $data = [
            'title' => 'Kintamani Tour || Griya Bali Trans',
            'css' => 'kintamani-tour',
        ];
        return view('/tourIdeas/kintamani-tour', $data);
    }
    public function anyTour()
    {
        $data = [
            'title' => 'TOUR ON REQUEST || Griya Bali Trans',
            'css' => 'any-tour'
        ];
        return view('/tourIdeas/any-tour', $data);
    }
}

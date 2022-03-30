<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use http\Env\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function number()
    {
        $number = rand(0, 100);

//        $url = $this->generateUrl('app_lucky_number', array('max' => 10));

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
//            'url' => $url,
        ));
    }

    public function test()
    {
        return $this->redirectToRoute('app_lucky_number');
    }

}
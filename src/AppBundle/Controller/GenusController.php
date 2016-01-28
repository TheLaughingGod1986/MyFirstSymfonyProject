<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 28/01/2016
 * Time: 21:09
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
       $notes = [
        'octopus asked me a riddle, outsmarted me',
        'i counted 8 legs... as they wraped around me',
        'inked!'
        ];

        return $this->render('genus/show.html.twig' , [
        'name' => $genusName,
            'notes' => $notes
        ]);
    }
}
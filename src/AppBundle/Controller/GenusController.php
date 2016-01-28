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
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig' , [
        'name' => $genusName
        ]);
        Return new Response($html);
    }
}
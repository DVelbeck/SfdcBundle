<?php

namespace SfdcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sfdcRepo = $em->getRepository('SalesforceBundle:SfdcCase');
        $origins = $sfdcRepo->getAllOrigins();
        
        echo('<pre>');
        print_r($origins);
        echo('</pre>');
        
        return $this->render('SfdcBundle:Default:index.html.twig');
    }
}

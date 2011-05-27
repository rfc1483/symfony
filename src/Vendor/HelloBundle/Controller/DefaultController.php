<?php

namespace Vendor\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_vendor_hello") 
     * @Template()
     */
    public function indexAction()
    {
        $name = 'Joe';
        
        return array('name' => $name);
    }
}

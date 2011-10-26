<?php

namespace Game\Bundle\DarkMercsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/games/darkmercs")
 */
class DefaultController extends Controller {

    /**
     * @Route("/",name="darkmercs")
     * @Template()
     */
    public function indexAction() {
        return array();
    }

}

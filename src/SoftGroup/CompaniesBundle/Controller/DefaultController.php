<?php

namespace SoftGroup\CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoftGroupCompaniesBundle:Default:index.html.twig');
    }
}

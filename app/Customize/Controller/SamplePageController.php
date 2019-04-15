<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class SamplePageController
{
  /**
   * @Method("GET")
   * @Route("/sample")
   */
  public function testMethod()
  {
    return new Response('Hello sample page !');
  }
}

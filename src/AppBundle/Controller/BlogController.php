<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('blog/index.html.twig', [
            'blog_entries' => array(
							array(
								'title' => 'First title',
								'body' => 'First content'
							),
							array(
								'title' => 'Second title',
								'body' => 'Second content'
							)
						),
        ]);
    }
}

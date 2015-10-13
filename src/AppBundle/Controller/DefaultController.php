<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/hello")
     */
    public function helloAction(Request $request)
    {
        if ($request->getMethod() === 'POST') {
            return $this->redirect(
                $this->generateUrl(
                    'hello',
                    ['name' => $request->request->get('name')]
                )
            );
        }

        return new Response(<<<HTML
<form method="POST" action="/hello">
    <input name="name"/>
    <input type="submit" value="Submit" />
</form>
HTML
        );
    }

    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloNameAction($name)
    {
        return new Response('Hello ' . $name);
    }

    /**
     * @Route("/hello/{name}.json")
     */
    public function helloJsonAction($name)
    {
        return new JsonResponse(['Hello' => $name]);
    }
}

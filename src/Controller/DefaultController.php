<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /** @var string */
    protected $firstName;

    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @Route("/", name="hello")
     */
    public function __invoke()
    {
        return new Response('hello ' . $this->firstName . '.');
    }
}

<?php

namespace App\Controller;

use App\Repository\PhoneRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api/phones")
 */
class PhoneController extends AbstractController
{
    /**
     * @Route("/{p<\d+>?1}", name="list_phone", methods={"GET"})
     */
    public function index(PhoneRepository $phoneRepository, SerializerInterface $serializer,Request $request)
    {
        $page = $request->query->get('p');
        if(is_null($page) || $page < 1) {
            $page = 1;
        }
        $limit = 5;
        $phones = $phoneRepository->findAllPhones($page, $limit);
        $data = $serializer->serialize($phones, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}

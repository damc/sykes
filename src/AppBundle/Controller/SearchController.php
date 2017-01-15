<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\SearchType;

class SearchController extends Controller
{
    const LIMIT = 5;

    /**
     * @Route("/{page}", name="search", requirements={"page": "\d+"})
     */
    public function indexAction(Request $request, $page = 1)
    {
        $searchForm = $this->createForm(SearchType::class, null, [
            'action' => $this->generateUrl('search'),
            'method' => 'GET'
        ]);

        $searchForm->handleRequest($request);

        $properties = $pageCount = null;

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $searchForm->getData();
            $properties = $em->getRepository('AppBundle:Properties')->search($data, $page, self::LIMIT);
            $pageCount = ceil($properties->count() / self::LIMIT);
        }

        return $this->render('search/index.html.twig', [
            'searchForm' => $searchForm->createView(),
            'properties' => $properties,
            'page' => $page,
            'pageCount' => $pageCount
        ]);
    }
}

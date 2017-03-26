<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $positions = $this->get('job.repository')->findAll();
        return [
            'positions' => $positions
        ];
    }

    /**
     * @Route("/api")
     */
    public function apiAction(Request $request)
    {
        if ($request->query->get('limit')) {
            $positions = $this->get('job.repository')->findBy([], null, $request->query->get('limit'));
        } else {
            $positions = $this->get('job.repository')->findAll();
        }
        return new Response($this->get('serializer')->serialize(['data' => $positions], 'json'));
    }

    /**
     * @Route("import")
     * @Template()
     * @param Request $request
     * @return array
     */
    public function importAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('submitFile', FileType::class, array('label' => 'File to Submit'))
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $file = $form->get('submitFile');
                try {
                    $file = file_get_contents($file->getData());
                    $json = json_decode($file, true);
                    foreach ($json as $key => $item) {
                        $this->get('job.repository')->insertJob($item);
                    }
                } catch (Exception $e) {
                    $this->get('logger')->error('Error while importing data to database',
                        ['exception' => $e->getMessage()]);
                }
            }

        }


        return [
            'form' => $form->createView()
        ];
    }
}

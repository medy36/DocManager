<?php

namespace DM\Bundle\DocumentBundle\Controller;

use DM\Bundle\DocumentBundle\Entity\Document;
use DM\Bundle\DocumentBundle\Form\DocumentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as FW;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

	/**
	 * @FW\Route("/new/document", name="new_document_page")
	 * @FW\Template()
	 */
	public function newDocumentAction() {
		$form = $this->createForm(new DocumentType(), new Document(), array(
			'action' => $this->generateUrl('post_new_document'),
			'method' => 'POST',
		));
		return $this->render('DMDocumentBundle:Partial:new.html.twig', array(
			'form' => $form->createView(),

		));
	}

	/**
	 * @FW\Route("/list/documents", name="list_documents")
	 * @FW\Template()
	 */
	public function listDocumentsAction() {

		$documents = $this->getDoctrine()
		                  ->getRepository('DMDocumentBundle:Document')
		                  ->findAll();

		return $this->render('DMDocumentBundle:Partial:list.html.twig', array(
			'documents' => $documents,
		));

	}

	/**
	 * @FW\Route("/api/list", name="api_list")
	 */
	public function apiListAction() {

		$documents = $this->getDoctrine()
		                  ->getRepository('DMDocumentBundle:Document')
		                  ->findAll();

		$serializer = $this->container->get('jms_serializer');
		return new Response($serializer->serialize($documents, 'json'));

	}

	/**
	 * @FW\Route("/post/document", name="post_new_document")
	 * @FW\Template()
	 */
	public function postDocumentAction(Request $request) {
		$form = $this->createForm(new DocumentType(), new Document(), array(
			'action' => $this->generateUrl('post_new_document'),
			'method' => 'POST',
		));
		$form = $form->handleRequest($request);

		$document = $form->getData();

		if ($form->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($document);
			$em->flush();

			return $this->redirect($this->generateUrl('document_details', array('slug' => $document->getId())));
		}

		return $this->render('DMDocumentBundle:Partial:new.html.twig', array(
			'form' => $form->createView(),
		));

	}

	/**
	 * @FW\Route("/document/details/{slug}", name="document_details")
	 * @FW\Template()
	 */
	public function documentDetailsAction($slug) {

		$document = $this->getDoctrine()
		                 ->getRepository('DMDocumentBundle:Document')
		                 ->findOneById($slug);

		if (!$document) {
			throw $this->createNotFoundException(
				'Aucun produit trouvé pour cet id : ' . $id
			);
		}

		$serializer = $this->container->get('jms_serializer');
		return new Response($serializer->serialize($document, 'json'));

		// return $this->render('DMDocumentBundle:Partial:details.html.twig', array(
		// 	'document' => $document,
		// ));

	}

}

<?php

namespace SoftGroup\CompaniesBundle\Controller;

use SoftGroup\CompaniesBundle\Entity\Name;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Name controller.
 *
 */
class NameController extends Controller
{
    /**
     * Lists all name entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $names = $em->getRepository('SoftGroupCompaniesBundle:Name')->findAll();

        return $this->render('name/index.html.twig', array(
            'names' => $names,
        ));
    }

    /**
     * Creates a new name entity.
     *
     */
    public function newAction(Request $request)
    {
        $name = new Name();
        $form = $this->createForm('SoftGroup\CompaniesBundle\Form\NameType', $name);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush($name);

            return $this->redirectToRoute('name_show', array('id' => $name->getId()));
        }

        return $this->render('name/new.html.twig', array(
            'name' => $name,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a name entity.
     *
     */
    public function showAction(Name $name)
    {
        $deleteForm = $this->createDeleteForm($name);

        return $this->render('name/show.html.twig', array(
            'name' => $name,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing name entity.
     *
     */
    public function editAction(Request $request, Name $name)
    {
        $deleteForm = $this->createDeleteForm($name);
        $editForm = $this->createForm('SoftGroup\CompaniesBundle\Form\NameType', $name);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('name_edit', array('id' => $name->getId()));
        }

        return $this->render('name/edit.html.twig', array(
            'name' => $name,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a name entity.
     *
     */
    public function deleteAction(Request $request, Name $name)
    {
        $form = $this->createDeleteForm($name);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($name);
            $em->flush();
        }

        return $this->redirectToRoute('name_index');
    }

    /**
     * Creates a form to delete a name entity.
     *
     * @param Name $name The name entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Name $name)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('name_delete', array('id' => $name->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace Mpl\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mpl\AppBundle\Entity\Subscriber;
use Mpl\AppBundle\Form\SubscriberType;

/**
 * Subscriber controller.
 *
 */
class SubscriberController extends Controller
{
    /**
     * Lists all Subscriber entities.
     * modif 2 git
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MplAppBundle:Subscriber')->findAll();

        return $this->render('MplAppBundle:Subscriber:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Subscriber entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MplAppBundle:Subscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscriber entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MplAppBundle:Subscriber:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Subscriber entity.
     *
     */
    public function newAction()
    {
        $entity = new Subscriber();
        $form   = $this->createForm(new SubscriberType(), $entity);

        return $this->render('MplAppBundle:Subscriber:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Subscriber entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Subscriber();
        $form = $this->createForm(new SubscriberType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurs_show', array('id' => $entity->getId())));
        }

        return $this->render('MplAppBundle:Subscriber:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Subscriber entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MplAppBundle:Subscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscriber entity.');
        }

        $editForm = $this->createForm(new SubscriberType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MplAppBundle:Subscriber:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Subscriber entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MplAppBundle:Subscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscriber entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SubscriberType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateurs_edit', array('id' => $id)));
        }

        return $this->render('MplAppBundle:Subscriber:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Subscriber entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MplAppBundle:Subscriber')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subscriber entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateurs'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniSistemas\Bundle\Entity\maquinasv;
use uniSistemas\Bundle\Form\maquinasvType;

/**
 * maquinasv controller.
 *
 */
class maquinasvController extends Controller
{

    /**
     * Lists all maquinasv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:maquinasv')->findAll();

        return $this->render('uniSistemasBundle:maquinasv:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new maquinasv entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new maquinasv();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('maquinasv_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:maquinasv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a maquinasv entity.
     *
     * @param maquinasv $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(maquinasv $entity)
    {
        $form = $this->createForm(new maquinasvType(), $entity, array(
            'action' => $this->generateUrl('maquinasv_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new maquinasv entity.
     *
     */
    public function newAction()
    {
        $entity = new maquinasv();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:maquinasv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a maquinasv entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maquinasv:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing maquinasv entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasv entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maquinasv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a maquinasv entity.
    *
    * @param maquinasv $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(maquinasv $entity)
    {
        $form = $this->createForm(new maquinasvType(), $entity, array(
            'action' => $this->generateUrl('maquinasv_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing maquinasv entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('maquinasv_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:maquinasv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a maquinasv entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:maquinasv')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find maquinasv entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('maquinasv'));
    }

    /**
     * Creates a form to delete a maquinasv entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('maquinasv_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

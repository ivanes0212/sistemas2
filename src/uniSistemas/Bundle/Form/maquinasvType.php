<?php

namespace uniSistemas\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class maquinasvType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ipvirtual')
            ->add('tareas')
            ->add('descripcion')
            ->add('maqhard')
            ->add('maqsoft')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniSistemas\Bundle\Entity\maquinasv'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unisistemas_bundle_maquinasv';
    }
}

<?php

namespace Wanasni\TrajetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PointType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieu', 'text',array(
                'label' => false,
                'attr'=>array('inputAutoComplete'=>'on'),
            ))
            ->add('latitude','hidden',array(
                'attr'=> array('class'=>'latitude'),
            ))
            ->add('longitude','hidden',array(
                'attr'=> array('class'=>'longitude'),
            ))

            ->add('order','hidden',array(
                'attr'=> array('class'=>'order'),
                'data'=>0
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wanasni\TrajetBundle\Entity\Point'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wanasni_trajetbundle_point';
    }
}

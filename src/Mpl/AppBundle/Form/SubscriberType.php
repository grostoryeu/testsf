<?php

namespace Mpl\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('ip')
            ->add('date_created')
            ->add('date_modified')
            ->add('genres', 'choice', array(
                'choices'   => array(
                        'matin'   => 'Matin',
                        'apresmidi' => 'Après-midi',
                        'soir'   => 'Soir',
                    ),
                    'multiple'  => true,
                )
            );
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mpl\AppBundle\Entity\Subscriber'
        ));
    }

    public function getName()
    {
        return 'mpl_appbundle_subscribertype';
    }
}

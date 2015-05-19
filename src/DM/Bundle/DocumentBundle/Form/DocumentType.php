<?php

namespace DM\Bundle\DocumentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')               
            ->add('description','genemu_tinymce',array(
                'required'=> true
                ))
            ->add('createdOrigineAt','genemu_jquerydate', array(
                    'widget' => 'single_text'
                ))
            
            ->add('file', 'vich_image', array(
                'required' => true,
            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DM\Bundle\DocumentBundle\Entity\Document',
            'required' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dm_bundle_documentbundle_document';
    }
}

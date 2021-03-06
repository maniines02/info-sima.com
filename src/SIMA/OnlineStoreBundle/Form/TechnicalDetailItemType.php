<?php

namespace SIMA\OnlineStoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TechnicalDetailItemType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('value')->add('createdAt')->add('updateAt')->add('isDeleted')->add('deletedAt')->add('characteristicType')->add('articleModel')->add('addedBy')->add('deletedBy')->add('updatedBy')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SIMA\OnlineStoreBundle\Entity\TechnicalDetailItem'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sima_onlinestorebundle_technicaldetailitem';
    }


}

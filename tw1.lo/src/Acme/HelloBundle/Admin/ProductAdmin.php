<?php

namespace Acme\HelloBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends Admin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')

            ->add('category', 'entity', array(
                'class' => 'Acme\HelloBundle\Entity\Category',
                'property' => 'name',
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
    }

}
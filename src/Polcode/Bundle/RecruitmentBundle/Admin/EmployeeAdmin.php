<?php

namespace Polcode\Bundle\RecruitmentBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmployeeAdmin extends Admin
{

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('firstName')
                ->add('lastName')
                ->add('email')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('firstName')
                ->add('lastName')
                ->add('email')
                ->add('am', null, array('associated_property' => 'lastName'))
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('firstName')
                ->add('lastName')
                ->add('email')
                ->add('am', null, array('property' => 'lastName'))
                ->add('projects', null, array('property' => 'name'))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                ->add('firstName')
                ->add('lastName')
                ->add('email')
                ->add('am', null, array('associated_property' => 'lastName'))
                ->add('projects', null, array('associated_property' => 'name'))
        ;
    }

}

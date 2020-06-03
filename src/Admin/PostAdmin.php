<?php

namespace App\Admin;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Class PostAdmin
 *
 * @package App\Admin
 */
final class PostAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('title')
            ->add('body', CKEditorType::class);
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('uuid')
            ->add('title')
            ->add('slug')
            ->add('body', 'html')
            ->add('createdAt')
            ->add('updatedAt');
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('uuid')
            ->add('title')
            ->add('slug')
            ->add('body');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('uuid')
            ->addIdentifier('slug')
            ->add('title')
            ->add('body', 'html', ['truncate' => ['length' => 50]])
            ->add('createdAt')
            ->add('updatedAt')
            ->add(
                '_action',
                null,
                [
                    'actions' => [
                        'show' => [],
                        'edit' => [],
                        'delete' => [],
                    ],
                ]
            );
    }
}

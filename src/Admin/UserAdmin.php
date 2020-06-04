<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

/**
 * Class PostAdmin
 *
 * @package App\Admin
 */
final class UserAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $subject = $this->getSubject();

        $formMapper
            ->tab('Profile')
                ->with(
                    'Edit the user',
                    [
                        'class' => 'col-md-6',
                        'box_class' => 'box box-solid box-primary',
                    ]
                )
                    ->add('email', TextType::class, [
                        'disabled' => null !== $subject->getId(),
                    ])
                    ->add('firstName')
                    ->add('lastName')
                    ->add(
                        'avataFile',
                        VichImageType::class,
                        [
                            'required' => false,
                        ]
                    )
                ->end()
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $subject = $this->getSubject();
        $name = $subject->getFirstname() . ' ' . $subject->getLastname();

        $showMapper
            ->tab('Profile')
                ->with(
                    $name,
                    [
                        'class' => 'col-md-6',
                        'box_class' => 'box box-solid box-primary',
                    ]
                )
                    ->add('email')
                    ->add('avata', 'avata')
                ->end()
            ->end()
            ->tab('Metadata')
                    ->with('Metadata',
                        [
                            'class' => 'col-md-6',
                            'box_class' => 'box box-solid box-primary',
                        ]
                    )
                    ->add('id')
                    ->add('uuid')
                    ->add('createdAt')
                    ->add('updatedAt')
                ->end()
            ->end();
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('uuid')
            ->add('email')
            ->add('firstName')
            ->add('lastName');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('uuid')
            ->add('email')
            ->add('firstName')
            ->add('lastName')
            ->add('avata')
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

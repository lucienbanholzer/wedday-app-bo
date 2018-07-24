<?php
/**
 * Created by PhpStorm.
 * User: lucien.banholzer
 * Date: 18/07/2018
 * Time: 17:35
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PhotosContestAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('rules', TextAreaType::class,["attr" => ["class" => "js-tinymce"] ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('rules');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('rules');
    }
}
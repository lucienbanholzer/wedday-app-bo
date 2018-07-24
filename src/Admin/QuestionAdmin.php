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

class QuestionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', TextType::class);
        $formMapper->add('option_1', TextType::class);
        $formMapper->add('option_2', TextType::class);
        $formMapper->add('option_3', TextType::class);
        $formMapper->add('option_4', TextType::class);
        $formMapper->add('correct_response', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('option_1');
        $datagridMapper->add('option_2');
        $datagridMapper->add('option_3');
        $datagridMapper->add('option_4');
        $datagridMapper->add('correct_response');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
        $listMapper->addIdentifier('option_1');
        $listMapper->addIdentifier('option_2');
        $listMapper->addIdentifier('option_3');
        $listMapper->addIdentifier('option_4');
        $listMapper->addIdentifier('correct_response');
    }
}
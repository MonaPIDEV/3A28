<?php

namespace App\Form;

use App\Entity\Guides;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\Length;


class GuidesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_gui',TextType::class)
            ->add('prenom_gui',TextType::class)
            ->add('etat_gui',ChoiceType::class, [
                'choices' => array(
                    'Disponible' => 'Disponible',
                    'Non Disponible' => 'Non Disponible',
                )
            ])
            ->add('desc_gui',TextareaType::class)
            ->add('num_tel_gui', NumberType::class)
            ->add('photo_gui',FileType::class, array('data_class'  => null, 'required' => false,))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Guides::class,
            'csrf_protection' => false
        ]);
    }
}

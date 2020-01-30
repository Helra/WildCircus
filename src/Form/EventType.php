<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Spectacle;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datetime', DateTimeType::class, ['label' => 'Date et Heure'])
            ->add('City', TextType::class, ['label' => 'Ville'])
            ->add('spectacle', EntityType::class, ['class' => Spectacle::class,'choice_label' => 'name', 'label' => 'Spectacle'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}

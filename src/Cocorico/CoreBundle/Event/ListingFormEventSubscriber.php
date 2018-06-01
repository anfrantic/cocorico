<?php

namespace Cocorico\CoreBundle\Event;

use Cocorico\CoreBundle\Event\ListingFormBuilderEvent;
use Cocorico\CoreBundle\Event\ListingFormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Isbn;
use Symfony\Component\Validator\Constraints\NotBlank;

class ListingFormEventSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            ListingFormEvents::LISTING_NEW_FORM_BUILD => [
                ['addIsbnField', 1]
            ]
        );
    }

    /**
     * @param \Cocorico\CoreBundle\Event\ListingFormBuilderEvent $event
     */
    public function addIsbnField(ListingFormBuilderEvent $event)
    {
        $form = $event->getFormBuilder();

        $form->add('isbn', TextType::class, [
            'label' => 'listing.form.isbn',
            'required' => true,
            'constraints' => [
                new NotBlank(),
                new Isbn(['type' => 'isbn10'])
            ]
        ]);
    }
}
<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\MessageBundle\Event;


use Cocorico\CoreBundle\Event\BookingEvent;
use Cocorico\CoreBundle\Event\BookingEvents;
use Cocorico\CoreBundle\Mailer\TwigSwiftMailer;
use Cocorico\MessageBundle\Model\ThreadManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class BookingSubscriber implements EventSubscriberInterface
{
    protected $threadManager;

    protected $mailer;

    /**
     * @param ThreadManager $threadManager
     */
    public function __construct(ThreadManager $threadManager, TwigSwiftMailer $mailer)
    {
        $this->threadManager = $threadManager;
        $this->mailer = $mailer;
    }


    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            BookingEvents::BOOKING_NEW_CREATED => [
                ['createNewListingThread', 1],
                ['notifyAdminOnNewBooking', 1],
            ]
        );
    }

    /**
     * @param \Cocorico\CoreBundle\Event\BookingEvent $event
     */
    public function createNewListingThread(BookingEvent $event)
    {
        $booking = $event->getBooking();
        $user = $booking->getUser();
        $this->threadManager->createNewListingThread($user, $booking);
    }

    /**
     * @param \Cocorico\CoreBundle\Event\BookingEvent $event
     */
    public function notifyAdminOnNewBooking(BookingEvent $event)
    {
        $booking = $event->getBooking();
        $user = $booking->getUser();

        $subject = "New booking #{$booking->getId()}";
        $message = "New booking #{$booking->getId()} from {$user->getFullName()}";

        $this->mailer->sendMessageToAdmin($subject, $message);
    }

}
<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\CoreBundle\DataFixtures\ORM;

use Cocorico\PageBundle\Entity\Page;
use Cocorico\PageBundle\Entity\PageTranslation;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //Page Who we are
        $page = new Page();
        $page->setPublished(true);

        $page->translate('en')->setMetaTitle('Who we are?');
        $page->translate('fr')->setMetaTitle('Qui sommes nous?');
        $page->translate('de')->setMetaTitle('Wer wir sind?');

        $page->translate('en')->setTitle('Who we are?');
        $page->translate('fr')->setTitle('Qui sommes nous?');
        $page->translate('de')->setTitle('Wer wir sind?');

        $page->translate('en')->setMetaDescription('in progress');
        $page->translate('fr')->setMetaDescription('en cours');
        $page->translate('de')->setMetaDescription('in Bearbeitung');

        $page->translate('en')->setDescription(
            '<p>We are Cocorico of course!</p>
            <h2>What is it?</h2>
            <p>Cocorico is an open source project dedicated to building a powerful (and free) solution for rental and service marketplaces.</p>
            <h2>Who&rsquo;s paying for all of this?</h2>
            <p><a href="http://www.cocolabs.io" target="_blank">Cocolabs</a>&nbsp;are. They are a Paris based web agency specialised in building collaborative marketplaces for the rental and service industry. Over the years they decided to share their work by funding the development of Cocorico.</p>
            <h2>What did you use to build Cocorico?</h2>
            <p>Cocorico is based on Symfony 2.</p>
            <h2>Where can I get it?</h2>
            <p>Here: <a href="https://github.com/Cocolabs-SAS/cocorico" target="_blank">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h2>Do you have a mascot?</h2>
            <p>Here&rsquo;s a video of our cute hen &ldquo;Cocotte&rdquo;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>'
        );
        $page->translate('fr')->setDescription(
            '<p>Nous sommes Cocorico bien s&ucirc;r !</p>
            <h2>Qu&#39;est-ce que c&#39;est?</h2>
            <p>Cocorico est un projet open source d&eacute;di&eacute; &agrave; la r&eacute;alisation d&#39;une solution puissante (et gratuite) pour les places de march&eacute; collaboratives (ou pas &agrave; vrai dire).</p>
            <h2>Qui finance tout &ccedil;a ?</h2>
            <p><a href="http://www.cocolabs.io" target="_blank">Cocolabs</a>. Nous r&eacute;alisons des marketplaces pour de nombreuses entreprises &agrave; travers le monde et sommes les cr&eacute;teurs de Cocorico.&nbsp;</p>
            <h2>Qu&rsquo;utilisez-vous sur Cocorico ?</h2>
            <p>Cocorico utilise Symfony 2.</p>
            <h2>O&ugrave; puis-je l&rsquo;obtenir?</h2>
            <p>Ici : <a href="https://github.com/Cocolabs-SAS/cocorico" target="_blank">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h2>Avez-vous une mascotte ?</h2>
            <p>Voici une vid&eacute;o de &quot;Cocotte&quot;&nbsp;: http://<a href="http://cocorico.rocks/">cocorico.rocks/</a></p>'
        );
        $page->translate('de')->setDescription(
            '<p>Wir sind natürlich Cocorico!</p>
            <h2>Was ist das?</h2>
            <p> Cocorico ist ein Open-Source-Projekt, das sich dem Aufbau einer leistungsstarken (und kostenlosen) Lösung für Miet- und Servicemärkte widmet.</p>
            <h2>Wer zahlt für all das? ?</h2>
            <p><a href="http://www.cocolabs.io" target="_blank">Cocolabs</a> sind. Sie sind eine in Paris ansässige Web-Agentur, die sich auf den Aufbau kollaborativer Marktplätze für die Miet- und Dienstleistungsbranche spezialisiert hat. Im Laufe der Jahre haben sie beschlossen, ihre Arbeit zu teilen, indem sie die Entwicklung von Cocorico finanzieren.&nbsp;</p>
            <h2>Was hast du benutzt, um Cocorico zu bauen?</h2>
            <p>Cocorico basiert auf Symfony 2.</p>
            <h2>Wo kann ich es bekommen? </h2>
            <p> Hier : <a href="https://github.com/Cocolabs-SAS/cocorico" target="_blank">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h2>Hast du ein Maskottchen? </h2>
            <p> Hier ein Video von unserer niedlichen Henne "Cocotte": http://<a href="http://cocorico.rocks/">cocorico.rocks/</a></p>'
        );

        //Page How it Works
        $page1 = new Page();
        $page1->setPublished(true);

        $page1->translate('en')->setMetaTitle('How it works?');
        $page1->translate('fr')->setMetaTitle('Comment ca marche?');
        $page1->translate('de')->setMetaTitle('Wie es funktioniert?');

        $page1->translate('en')->setTitle('How it works?');
        $page1->translate('fr')->setTitle('Comment ca marche?');
        $page1->translate('de')->setTitle('Wie es funktioniert?');

        $page1->translate('en')->setMetaDescription('in progress');
        $page1->translate('fr')->setMetaDescription('en cours');
        $page1->translate('de')->setMetaDescription('in Bearbeitung');

        $page1->translate('en')->setDescription('in progress');
        $page1->translate('fr')->setDescription('en cours');
        $page1->translate('de')->setDescription('in Bearbeitung');

        //Page The team
        $page2 = new Page();
        $page2->setPublished(true);

        $page2->translate('en')->setMetaTitle('The team');
        $page2->translate('fr')->setMetaTitle('L\'équipe');
        $page2->translate('de')->setMetaTitle('Das Team');

        $page2->translate('en')->setTitle('The team');
        $page2->translate('fr')->setTitle('L\'équipe');
        $page2->translate('de')->setTitle('Das Team');

        $page2->translate('en')->setMetaDescription('in progress');
        $page2->translate('fr')->setMetaDescription('en cours');
        $page2->translate('de')->setMetaDescription('in Bearbeitung');

        $page2->translate('en')->setDescription('in progress');
        $page2->translate('fr')->setDescription('en cours');
        $page2->translate('de')->setDescription('in Bearbeitung');

        //Page FAQ
        $page3 = new Page();
        $page3->setPublished(true);

        $page3->translate('en')->setMetaTitle('FAQ');
        $page3->translate('fr')->setMetaTitle('FAQ');
        $page3->translate('de')->setMetaTitle('FAQ');

        $page3->translate('en')->setTitle('FAQ');
        $page3->translate('fr')->setTitle('FAQ');
        $page3->translate('de')->setTitle('FAQ');

        $page3->translate('en')->setMetaDescription('in progress');
        $page3->translate('fr')->setMetaDescription('en cours');
        $page3->translate('de')->setMetaDescription('en cours');

        $page3->translate('en')->setDescription('in progress');
        $page3->translate('fr')->setDescription('en cours');
        $page3->translate('de')->setDescription('in Bearbeitung');


        //Page Legal notices
        $page4 = new Page();
        $page4->setPublished(true);

        $page4->translate('en')->setMetaTitle('Legal notices');
        $page4->translate('fr')->setMetaTitle('Mentions légales');
        $page4->translate('de')->setMetaTitle('Rechtliche Hinweise');

        $page4->translate('en')->setTitle('Legal notices');
        $page4->translate('fr')->setTitle('Mentions légales');
        $page4->translate('de')->setTitle('Rechtliche Hinweise');

        $page4->translate('en')->setMetaDescription('in progress');
        $page4->translate('fr')->setMetaDescription('en cours');
        $page4->translate('de')->setMetaDescription('en cours');

        $page4->translate('en')->setDescription('in progress');
        $page4->translate('fr')->setDescription('en cours');
        $page4->translate('de')->setDescription('in Bearbeitung');


        $page5 = new Page();
        $page5->setPublished(true);

        $page5->translate('en')->setMetaTitle('Terms of use');
        $page5->translate('fr')->setMetaTitle('Conditions générales d\'utilisation');
        $page5->translate('de')->setMetaTitle('Nutzungsbedingungen');

        $page5->translate('en')->setTitle('Terms of use');
        $page5->translate('fr')->setTitle('Conditions générales d\'utilisation');
        $page5->translate('de')->setTitle('Nutzungsbedingungen');

        $page5->translate('en')->setMetaDescription('in progress');
        $page5->translate('fr')->setMetaDescription('en cours');
        $page5->translate('de')->setMetaDescription('in Bearbeitung');

        $page5->translate('en')->setDescription('in progress');
        $page5->translate('fr')->setDescription('en cours');
        $page5->translate('de')->setDescription('in Bearbeitung');

        $manager->persist($page);
        $manager->persist($page1);
        $manager->persist($page2);
        $manager->persist($page3);
        $manager->persist($page4);
        $manager->persist($page5);

        $page->mergeNewTranslations();
        $page1->mergeNewTranslations();
        $page2->mergeNewTranslations();
        $page3->mergeNewTranslations();
        $page4->mergeNewTranslations();
        $page5->mergeNewTranslations();

        $manager->flush();

        /** @var PageTranslation $translation */
        foreach ($page->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page1->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page2->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page3->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page4->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page5->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        $manager->persist($page);
        $manager->persist($page1);
        $manager->persist($page2);
        $manager->persist($page3);
        $manager->persist($page4);
        $manager->persist($page5);

        $manager->flush();

        $this->addReference('who-we-are', $page);
        $this->addReference('how-it-works', $page1);
        $this->addReference('the-team', $page2);
        $this->addReference('faq', $page3);
        $this->addReference('legal-notice', $page4);
        $this->addReference('terms-of-use', $page5);

    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 9;
    }

}

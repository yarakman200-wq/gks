<?php

declare(strict_types=1);
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '2rowcontainer', // CType
            '2 Spalten Nebeneinander', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 200],
                    ['name' => 'Rechts', 'colPos' => 201]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'Dienstleistungs_Header', // CType
            'Dienstleistungs-Header', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'Text', 'colPos' => 300],
                    ['name' => 'Bild', 'colPos' => 301]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'referenzen_carousel', // CType
            'Referenzen Carousel', // label
            'Carousel mit Referenzen-Logos', // description
            [
                [
                    ['name' => 'Referenzen', 'colPos' => 400]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'ergebnis_bild', // CType
            'Ergebnis Bild', // label
            'Ergebnis Bild', // description
            [
                [
                    ['name' => 'Ergebnis Bild', 'colPos' => 500],
                    ['name' => 'Ergebnis Bild', 'colPos' => 501],
                    ['name' => 'Ergebnis Bild', 'colPos' => 502],

                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'google_maps', // CType
            'Google Maps', // label
            'Google Maps Integration', // description
            [
                [
                    ['name' => 'Google Maps', 'colPos' => 600]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'start_first', // CType
            'Landingpage', // label
            'Landingpage auf der Startseite', // description
            [
                [
                    ['name' => 'Landingpage', 'colPos' => 700]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);




\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'statistik', // CType
            'Statistik', // label
            'Statistik-Container', // description
            [
                [
                    ['name' => 'Statistik', 'colPos' => 800],
                    ['name' => 'Statistik', 'colPos' => 801],
                    ['name' => 'Statistik', 'colPos' => 802]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'leistungen', // CType
            'Leistungen', // label
            'Cards mit Bild und Hover-Text', // description
            [
                [
                    ['name' => 'Leistung', 'colPos' => 900]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'vorteile', // CType
            'Vorteile', // label
            'Vorteile mit individuell bearbeitbaren Karten', // description
            [
                [
                    ['name' => 'Vorteil 1', 'colPos' => 1000],
                    ['name' => 'Vorteil 2', 'colPos' => 1001],
                    ['name' => 'Vorteil 3', 'colPos' => 1002],
                    ['name' => 'Vorteil 4', 'colPos' => 1003]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'textfeld', // CType
            'Textfeld', // label
            'Textfeld mit individuell bearbeitbaren Inhalten', // description
            [
                [
                    ['name' => 'Textfeld 1', 'colPos' => 1100]
                    
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'stellen', // CType
            'Stellen Vorteile', // label
            'Vorteile mit einzelnen Karten für Arbeitsumfeld', // description
            [
                [
                    ['name' => 'Vorteil 1', 'colPos' => 1200],
                    ['name' => 'Vorteil 2', 'colPos' => 1201],
                    ['name' => 'Vorteil 3', 'colPos' => 1202],
                    ['name' => 'Vorteil 4', 'colPos' => 1203]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

// Job Card - einzelne Stellenanzeige
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'job_card', // CType
            'Job-Anzeige', // label
            'Einzelne Job-Position mit Titel, Badge, Ort, Datum, Aufgaben und Anforderungen', // description
            [
                [
                    ['name' => 'Jobtitel & Badge', 'colPos' => 1300],
                    ['name' => 'Ort', 'colPos' => 1301],
                    ['name' => 'Startdatum', 'colPos' => 1302],
                    ['name' => 'Aufgaben', 'colPos' => 1303],
                    ['name' => 'Anforderungen', 'colPos' => 1304],
                    ['name' => 'Bewerbungslink', 'colPos' => 1305]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'jobs_alle', // CType
            'Stellenangebote', // label
            'Intro + mehrere Stellenangebote als Einzelinhalte', // description
            [
                [
                    ['name' => 'Intro', 'colPos' => 1210],
                    ['name' => 'Stelle 1', 'colPos' => 1211],
                    ['name' => 'Stelle 2', 'colPos' => 1212],
                    ['name' => 'Stelle 3', 'colPos' => 1213],
                    ['name' => 'Stelle 4', 'colPos' => 1214]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

// Kontaktseite - 2 Spalten
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'kontakt_form', // CType
            'Kontaktseite', // label
            'Kontaktinformationen (links) und Kontaktformular (rechts)', // description
            [
                [
                    ['name' => 'InfoText', 'colPos' => 1499],

                    ['name' => 'Telefon', 'colPos' => 1500],
                    ['name' => 'E-Mail', 'colPos' => 1501],
                    ['name' => 'Adresse', 'colPos' => 1502]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);


// Kontaktseite - 2 Spalten
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'bewerbungs_form', // CType
            'Bewerbungsseite', // label
            'Bewerbungsinformationen (links) und Bewerbungsformular (rechts)', // description
            [
                [
                    ['name' => 'InfoText', 'colPos' => 1600],

                    ['name' => 'Telefon', 'colPos' => 1601],
                    ['name' => 'E-Mail', 'colPos' => 1602],
                    ['name' => 'Adresse', 'colPos' => 1603]
                ]
            ] // grid configuration
        )
    )
    ->setIcon('EXT:sitepackage/Resources/Public/Icons/services-cards.svg')
);

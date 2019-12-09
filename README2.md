# TIDAL TLI_B5

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://forthebadge.com)  [![forthebadge](http://forthebadge.com/images/badges/powered-by-electricity.svg)](http://forthebadge.com)

Descriptif de notre site web

## Pour commencer

Le site a été developpé sur une architecture WAMP 3.1.9. Le framework utilisé est Kickstart, le site est responsive.  

Notre site comporte 2 versions : Une version dite "template" avec smarty mais qui ne comporte pas toutes les fonctionnalités et une seconde sans template qui est bien plus complète.

### Pré-requis

WAMP 3.1.9 comporte les logiciels et leurs versions suivantes : 

- Apache 2.4.39
- PHP 7.2.18
- PHP 5.6.40 for CLI
- MySQL 5.7.26
- MariaDB 10.3.14
- PhpMyAdmin 4.8.5

### Installation

-Posséder une infrastructure logicielle semblable à la notre

-Importez la base ``acu.sql`` 

-Ajoutez un compte acuRO avec le mot de passe `` McLWkiZfkyGqGu7x``.
Cet utilisateur ne doit avoir qu'un droit SELECT sur la base acu

-Ajoutez un compte acuRW avec le mot de passe ``FS2nZXF57vshkiyS``.
Cet utilisateur doit avoir les droits SELECT, INSERT, UPDATE, DELETE sur la base acu

-Ajoutez le site au VHOST Apache

## Démarrage

Rendez-vous sur http://localhost/acupuncture/accueil.php

## Fonctionnalités implantées

- [x] Vous réaliserez une page permettant d’aﬃcher la liste des pathologies. Ces pathologies pourront faire l’objet de ﬁltrage comme indiqué en introduction. 
- [x] Vous implémenterez une fonctionnalité de recherche de pathologie par mot–clef. Cette fonctionnalité ne sera accessible qu’aux utilisateurs authentiﬁés.
- [x] Vous proposerez un système de gestion des utilisateurs (inscription, login, session, etc.). Un utilisateur connecté aura la possibilité d’accéder à la fonctionnalité de recherche de pathologies par mot–clef

## Divers

- Nos requêtes SQL sont préparées avec PDO pour éviter les injections. 
- Nous utilisons un compte par responsabilité en SQL, un en read-only, un second read-write.


## Fabriqué avec

* [kickstart.css](http://getkickstart.com/) - Framework CSS (front-end)
* [Notepad++](https://notepad-plus-plus.org/) - Editeur de textes
* [WAMP](http://www.wampserver.com/) - Stack serveur web

## Auteurs

* **Juliette BONIAUD**
* **Lilian JUDE**
* **Solène SINNING**
* **Jérémy MOUGEY**

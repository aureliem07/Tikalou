# Création d'un site d'e-commerce avec WordPress

Vous trouverez ici la création de mon site pour la boutique Tikalou, vente de produits Réunionnais, en utilisant WordPress.

##  Installation

Pour administrer son site Wordpress en local, on installe [LocalWP](https://localwp.com/). Ensuite, on se connecte à son compte Wordpress et on l'associe à un compte Flywheel.

##  Plugins installés

- **WooCommerce** : boîte à outil e-commerce
- **WooCommerce Shipping & Tax** : configuration des taxes, des étiquettes d'expédition et des paiements
- **Yoast SEO** : référencement
- **WP Forms** : création de formulaires (contact, newsletters,...)
- **Polylang** : gestion multilingues
- **Lingotek Translation** : localisation pour traduction
- **Jetpack** : sécurité et sauvegarde automatique
- **Complianz** : gestion RGPD et cookies

##  Thème 

Choisir un thème et le personnaliser.

```mermaid
graph TD;
A(Apparence) --> B(Thèmes);
B --> C(Télécharger thème);
```

##  Modification Menu

Méthode pour modifier le menu dans le dashboard de WordPress :

```mermaid
graph LR
A(Dashboard) --> B(Apparence)
B --> C(Menus)
C --> D(Compléter le formulaire)
C --> E(Ajouter les pages au menu)
```

##  Ajouter des catégories et des produits

Les différentes méthodes pour modifier les catégories et les produits : 

- Dans le dashboard sur l'Admin de WordPress : 
```mermaid
graph LR
A(Dashboard) --> B(Produits)
B --> C(Cathégorie)
B --> D(Ajouter)
C --> E(Compléter le formulaire)
D --> E
```
- Dans la DataBase de Local (SQL) :
```mermaid
graph LR
A(select wp_wc_product_meta_lookup) -->B(Nouvel élément)
B --> C(Compléter le formulaire)
```

##  Créer des comptes clients et administrateurs

Méthode pour modifier créer des comptes clients : 
```mermaid
graph LR
A(select wp_wc_customer_lookup) --> B(Nouvel élément)
B --> C(Compléter la fiche produit)
```
Les différentes méthodes pour créer des comptes administrateurs : 

- Dans le dashboard sur l'Admin de Wordpress : 
```mermaid
graph LR
A(Dashboard) --> B(Comptes)
B --> C(Ajouter)
C --> D(Compléter le formulaire)
```
- Dans la DataBase de Local (SQL) :
```mermaid
graph LR
A(select wp_wc_product_meta_lookup) -->B(Nouvel élément)
B --> C(Compléter la fiche produit)
```

# Design pattern Bâtisseur (Builder)

## Contexte
* L'objet est complexe à créer en seule fois et demande beaucoup de configuration
* On cherche à bâtir étape par étape l'objet

## Démarche
* On passe par une classe builder qui proposera des méthodes pour progresser dans la construction
* Le bâtisseur conservera l'état "en cours".
* Il pourra à la fin nous retourner l'objet terminé.

Exemple dans la vie réelle.

Quand on est sur une boutique en ligne et qu'on ajoute dans le panier, et à la fin, valide le panier.
Il s'agit du même fonctionnement que le builder. On construit étape par étape notre commande.
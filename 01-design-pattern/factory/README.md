# Design pattern : La fabrique (factory)

## Contexte
* L'instance doit pouvoir être massivement utilisée.
* L'instance est très compliquée à créer (ex : accès à de la config, mdp, nombre important d'autres objets, etc.)

## Démarche
* Définir une classe "Factory" qui aura pour responsabilité la création de l'instance
* Les paramètres de la factory pourront être différent, simplifié, etc.
* J'obtiens alors une instance de la classe ou l'interface qui m'intéresse

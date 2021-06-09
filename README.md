# Initiation à Symfony

## Session attachée à la requête :

*1) Démarrer une session*
`$session = $request->getSession();`

*2) Attribuer une valeur à la vriable de session*
`$variable  = $session->set('nomVariable', 'value');`

*3) Accéder à/lire la variable de session*
`$variable = $session->get('nomVariable');`


## Flash Bag :

*1) Démarrer une session*
`$session = $request->getSession();`

*2) Construire un nouveau Flash Bag*
`$session->getFlashBag()->add('variable','message');`

*3) Flash Bag renvoie un tableau*
`$newVariable = $session->getFlashBag()->get('variable');`


## Découpage App

• 1 contrôleur -> plusieurs actions
• Une pratique fréquente : 1 controller qui gère le front, 1 controller qui gère le back

• Les routes sont des indications pour permettre, en fonction d'une requête utilisateur (url), de retrouver le contrôleur et l'action à executer
• Il existe plusieurs manière de définir les routes : routes.yaml / annotation (les annotations restant les plus simples et plus compréhensibles)


## Sécurité :

Il est possivble d'effectueer des ontroles directement dansla définitions de la route -> sécurité +++ en évitant les failles XML. 
Pour ce faire, on peut ajouter des controles dans les paramètres des fonctions afin d'apporter une sécurité en plus au code. 
**EX :** `public function hello(Request $request, int $age)`

Il est possible d'aller encoe plus loin avec l'option requirements. 
Cette option permet de défininr une expression régulière (RegEx) pour chaque paramètre ! 


## Syntaxe Twig :
• {{...}} : utilisé pour afficher le contenu d'une variable ou le résultat de l'évaluation d'une expression
• {%...%} : utilisé pour executer une structure de contrôle (if, foreach, ...)
• {#...#} : utilisé pour ajouter des commentaires 'ces commentaires ne seront pas visible sur la page HTML générée)


### Memos

• foreach($params as $key => $value) renvoie 2 informations
• foreach($params as $value) renvoie 1 information
• Symfony n'utilise pas $_SESSION 
• Lister les routes de l'application `php bin/console debugrouter`
• Vider le cache `php bin/console cache:clear`

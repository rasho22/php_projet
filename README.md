# Documentation fonctionnelle du projet DDCSPP

## Description du contexte

Un organisme de l'état vous demande de réaliser un site web dans le cadre d'une campagne pour la mixité. L'idée est de réaliser un site avec une rapide ressemblance à Pinterest. C'est à dire, une application où sont affichées de nombreux médias, facilement affichables et accessibles.

L'objectif de l'application sera d'être modulable et responsive, afin qu'ils puissent l'utiliser sur de nombreuses thématiques. Pas uniquement la mixité. Si votre solution leurs plait, il se pourrait qu'ils utilisent cette application régionalement en "kit à installer" et faciliter le travail de nombreux autres employés.

Cette application de type SPA contiendra un grand dashboard, dans lequel, les utilisateurs connectés pourront rajouter du contenu à leur guise. Les contenus seront représentés sous forme de blocs, et sera facilement reconnaissable grâce à une vignette. Chaque bloc sera modifiable en largeur et longueur afin de pouvoir personnaliser la page du dashboard. 

La pluspart des utilisateurs ne seront pas connectés.

Si un utilisateur connecté ou non connecté clique sur un bloc, celui-ci s'agrandit afin de prendre toute la taille de la page et afficher les médias. 

Attention, si un son ou une vidée est incorporée dans le bloc, le media devra se lancer automatiquement lors de l'ouverture du bloc. Une interface de contrôles du média sera affichée.


Une connection utilisateur sera requise afin q'uniquement les organisateurs des évènements, ou l'équipe mandatée puisse rajouter du contenu.
La partie d'administration doit être très intuitive. Afin d'avoir un meilleur impact sur les jeunes, ils aimeraient que l'application ait un effet "gaming" dans le design.

Ils ne savent pas encore s'ils souhaiteraient que ce site permette la gestion de plusieurs SPA.
Face à cette incertitude, il peut être interessant de prévoir une hiérarchie dans les groupes d'utilisateurs ainsi qu'au compte super user. 

Cette application sera livrée au client avec un compte super utilisateur déjà présent dans la base de données.  Ce dernier sera le seul membre authorisé à créer des utilisateurs. Il sera possible pour chaque utilisateur de leurs assigner des droits.

Un des droits devra également concerner la configuration de la SPA:

 - Au moins 3 thèmes : Fond Noir, Fond Blanc, Fond avec une image de son choix
 - Reglage de l'opacité du fond
 - Format des blocs possibles (en fonction du device)

Au sein d'un bloc, il devra être possible de rajouter :

* Une image (accompagné d'un son - facultatif)
* Une vidéo

## Les scénarios
### 1èr scénario: visteur 
![label](/home/apprenant22/Téléchargements/user_lambda.png)

### 2èm scénario:modérateur

>1.modo créer un post:

![label](/home/apprenant22/Téléchargements/user_modo.png)

>2.modo éditer un post:

![label](/home/apprenant22/Téléchargements/modo_modif_post.png)

>3.modo supprimer un post:

![label](/home/apprenant22/Téléchargements/supp_post_modo.png)

>4.modo configuartion:

![label](/home/apprenant22/Téléchargements/modo_perso_accueil.png)

### 3èm scénario:superadmin
![label](/home/apprenant22/Téléchargements/supuser_add_modo.png)

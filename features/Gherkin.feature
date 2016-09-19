		===================
		===VISUALISATION===
		===================

Scénario: Visualisation de la page Accueil
	Etant donné que je tape l'url du site
	Alors j'accède à la page Accueil
	Et je vois l'ensemble des blocs


Scénario: Visualisation d'un bloc
	Etant donné que je suis Visiteur
	Lorsque je clique sur un bloc
	Alors le bloc s'agrandit



		=====================
		===RECHERCHE BLOC====
		=====================

Scénario: Rechercher par le biais de la date un bloc existant
	Etant donné que je suis sur la page Accueil
	Lorsque un bloc existe avec la date "01/01/1970"
	Et que je filtre sur la date "01/01/1970"
	Alors je suis sur la page Accueil
	Et je vois un seul bloc


Scénario: Rechercher par le biais du titre un bloc existant
	Etant donné que je suis sur la page Accueil
	Lorsque un bloc existe avec la titre "blabla"
	Et que je filtre sur la titre "blabla"
	Alors je suis sur la page Accueil
	Et je vois un seul bloc


Scénario: Rechercher par le biais d'un media un bloc existant
	Etant donné que je suis sur la page Accueil
	Lorsque un bloc existe avec le media "blabla"
	Et que je filtre sur le media "blabla"
	Alors je suis sur la page Accueil
	Et je vois un seul bloc


		===================
		=====CONNEXION=====
		===================

Scénario: Se connecter avec les bons identifiants
	Etant donné je suis Visteur
	Et que je clique sur "Se connecter"
	Lorsque je saisis un identifiant correcte
	Et que je saisis un mot de passe correcte
	Alors j'accède à mon compte
	Et je deviens Moderateur
	Ou je deviens Super-Admin


Scénario: Se connecter avec 1 mauvais identifiant
	Etant donné je suis Visteur
	Et que je clique sur "Se connecter"
	Lorsque je saisis un identifiant incorrecte
	Ou que je saisis un mot de passe incorrecte
	Alors je n'accède pas à mon compte
	Et j'obtiens un message d'erreur
	Et je reste Visiteur


Scénario: Se connecter avec 2 mauvais identifiants
	Etant donné je suis Visteur
	Et que je clique sur "Se connecter"
	Lorsque je saisis un identifiant incorrecte
	Et que je saisis un mot de passe incorrecte
	Alors je n'accède pas à mon compte
	Et j'obtiens un message d'erreur
	Et je reste Visiteur


Scénario: Se connecter avec 1 mauvais identifiant 3 fois de suite
	Etant donné je suis Visteur
	Et que je clique sur "Se connecter"
	Lorsque je saisis un identifiant incorrecte 3 fois de suite
	Ou que je saisis un mot de passe incorrecte 3 fois de suite
	Alors mon compte se bloque
	Et si mon identifiant est reconnu par la base de donnée
	Alors j'obtiens un mail avec un nouveau mot de passe
	Et je reste Visiteur


Scénario: Se connecter avec 2 mauvais identifiants 3 fois de suite
	Etant donné je suis Visteur
	Et que je clique sur "Se connecter"
	Lorsque je saisis un identifiant incorrecte 3 fois de suite
	Et que je saisis un mot de passe incorrecte 3 fois de suite
	Alors mon compte se bloque
	Et si mon identifiant est reconnu par la base de donnée
	Alors j'obtiens un mail avec un nouveau mot de passe
	Et je reste Visiteur

Scénario: Ajouter un bloc photo avec du son
	Etant donné que je suis connecté
	Et je suis sur la page Accueil
	Alors je peux uploader une photo avec du son
	Et je peux choisir la taille du bloc
	Et je peux ajouter ce bloc à la page d'accueil


Scénario: Ajouter un bloc photo sans son
	Etant donné que je suis connecté
	Et je suis sur la page Accueil
	Alors je peux uploader une photo
	Et je peux choisir la taille du bloc
	Et je peux ajouter ce bloc à la page d'accueil

Scénario: Ajouter un bloc avec une piste son
	Etant donné que je suis connecté
	Et je suis sur la page Accueil
	Alors je peux uploader un fichier sonore
	Et je peux choisir la taille du bloc
	Et je peux ajouter ce bloc à la page d'accueil	

Scénario: Ajouter un bloc vidéo
	Etant donné que je suis connecté
	Et je suis sur la page Accueil
	Ou je peux uploader une vidéo
	Et je peux choisir la taille du bloc
	Et je peux ajouter ce bloc à la page d'accueil		

Scénario: Editer un bloc en tant que modérateur
	Etant donné que je suis connecté en tant que modérateur
	Et que j'ai déjà ajouté un bloc
	Alors je peux changer la taille de ce bloc
	Ou le supprimer
	Mais si ce bloc n'existe plus
	Alors je peux le créer

Scénario: Editer un bloc en tant qu'administrateur
	Etant donné que je suis connecté en tant qu'administrateur
	Et qu'un bloc existe
	Alors je peux éditer ce bloc
	Ou le supprimer
	Mais si ce bloc n'existe plus
	Alors je peux le créer

Scénario: Modifier la configuration de la page
	Etant donné que je suis connecté en tant qu'administrateur
	Ou que je suis connecté en tant que modérateur
	Et que je suis sur la page Accueil
	Alors je peux choisir le thème (noir, blanc ou image au choix)
	Et je peux régler l'opacité

Scénario: Ajouter ou supprimer un modérateur
	Etant donné que je suis connecté en tant qu'administrateur
	Alors je peux ajouter un compte modérateur
	Ou je peux supprimer un compte modérateur

Scénario: Ajouter un administrateur
	Etant donné que je suis connecté en tant qu'administrateur
	Alors je peux ajouter un compte administrateur
	Ou je peux supprimer un compte administrateur


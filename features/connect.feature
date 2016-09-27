# language: fr

Fonctionnalité: Utilisateurs
	Afin que je puisse avoir la possibilité de visiter la page Accueil
	Etant donné que je ne suis pas inscrit
	Je dois être capable de visualiser la page Accueil
    
Scénario: Se connecter avec les bons identifiants
    Etant donné je suis "Visiteur"
    Quand j'accède à mon compte "Super Admin"
    Et je deviens "Super Admin"

Scénario: Creation d'un compte Modérateur
	Etant donné que je suis connecté en tant que "Super Admin"
	Quand je creé un compte "Modérateur"
	Alors je peux ajouter une permission editer au compte "Modérateur"


# language: fr

Fonctionnalité: Utilisateurs
	Afin que je puisse avoir la possibilité de visiter la page Accueil
	Etant donné que je ne suis pas inscrit
	Je dois être capable de visualiser la page Accueil


Scénario: Rechercher par le biais de la date un bloc existant
	Etant donné que je filtre sur la date "01/01/1999"
	Quand un bloc existe avec la date "01/01/1999"
	Alors je vois un seul bloc


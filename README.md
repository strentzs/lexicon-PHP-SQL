# Lexicon : note d'intention

Ce projet est un projet annexe que j'ai développé pendant mon temps libre. Il s'agit d'un lexique itératif de vieux français, de français littéraire, voire désué. Ce lexique a pour but de souligner la beauté et la richesse lexicale de la langue française, et d'inviter ceux qui le désir à s'essayer à son maniement.

## Version annexe

Ce site est la version originale dans laquelle je l'ai codé. Il existe cependant une autre version, disponible sur mon GitHub, où j'ai réécrit le code en JavaScript et JSON, afin de faciliter l'usage pour ceux qui n'auraient pas la possibilité d'utiliser du PHP.

## Version originale

J'ai développé ce site en local, à l'aide de PHP et MySQL. Ainsi, toutes les fonctions que j'y ai créées ont été conçues pour s'imbriquer dans une structure en base de données. Les mots présents dans les deux tableaux étaient requêtés dans une table "word" de la BDD, et les écrits du forum dans une seconde table "text". La force de ce fonctionnement était de permettre à l'utilisateur de s'essayer à ajouter des textes sans nul besoin de se connecter, pour partager ses essais.

## Fonctions admin

Il y a également un certain nombre de fonctions que j'ai supprimées pour des raisons de sécurité. Notamment en ce qui concerne les boutons de suppression de dernière ligne du tableau, et de suppression de l'intégralité des données du tableau. Bien que je les ai gardés durant la phase de développement.

## MAJ

Comme les données de la BDD ne sont pas accessibles, car développé en local, j'ai converti mon bloc-note de vocabulaire au format JSON, que vous pouvez retrouver dans le dossier BDD du repository lexicon-JavaScript-JSON, si vous avez besoin d'une base de test.

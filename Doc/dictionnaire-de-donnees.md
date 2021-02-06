# Dictionnaire de données

## User (`User`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre user|
|Firstname|VARCHAR(64)|NOT NULL|Le nom du produit|
|Lastname|TEXT|NULL|La description du produit|
|Login|VARCHAR(128)|NULL|L'URL de l'image du produit|
|email|DECIMAL(10,2)|NOT NULL, DEFAULT 0|Le prix du produit|
|idrole|TINYINT(1)|NOT NULL, DEFAULT 0|L'avis sur le produit, de 1 à 5|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du produit|


## Role (`Role`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la catégorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la catégorie|

## URL (`brand`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la marque|
|name|VARCHAR(64)|NOT NULL|Le nom de la marque|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la marque dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la marque|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la marque|

## Type de produit (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du type|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage du type dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création du type|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du type|

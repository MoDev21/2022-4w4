
-- Extraire les champs post_title et post_type
-- de la table wp_posts
-- quand le début du titre commence par 582
-- % est un «wildcard » qui remplace une chaîne de caractères quelconques
SELECT `post_title`, `post_type` FROM `wp_posts` WHERE `post_title` LIKE "582%";


SELECT SUBSTR(`post_title`,5)  , `post_type` 
    FROM `wp_posts` 
    WHERE `post_title` LIKE "582%";

-- % veut dire plusieurs caractères quesconques qui se suivent
-- _ veut dire un seul caractère quelconque
SELECT SUBSTR(`post_title`,5)  , `post_type` 
    FROM `wp_posts` 
    WHERE `post_title` LIKE "___-%";    



UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;   

UPDATE `wp_posts`
SET `post_title` = SUBSTR(`post_title`,5)
WHERE `post_title` LIKE "___-%";  

-- Pour détruire les posts de post_type = revision

DELETE FROM wp_posts WHERE post_type = "revision";

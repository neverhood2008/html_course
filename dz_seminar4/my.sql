
-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates (name,age,address) VALUES ("Иван",23,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Света",15,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Катя",68,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Петр",45,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Оля",25,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Сергей",23,"Ростов");
INSERT INTO classmates (name,age,address) VALUES ("Павел",21,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Руслан",83,"Самара");
INSERT INTO classmates (name,age,address) VALUES ("Вася",18,"Москва");
INSERT INTO classmates (name,age,address) VALUES ("Саша",30,"Москва");



-- fetch 
SELECT name as Имя
FROM classmates 
WHERE address = 'Москва' and age>=18 and age<30 ORDER BY name;

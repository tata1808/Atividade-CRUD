CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  role ENUM('master', 'user')
);

INSERT INTO users (username, password, role) VALUES ('master', 'senha_segura', 'master');
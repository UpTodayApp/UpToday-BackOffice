CREATE TABLE usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  NombreUsuario varchar(20),
  Contraseña varchar(255),
  Correo varchar(255),
  FechaNacimiento date,
  Reputacion int(3),
  Estado varchar(100),
  Pais varchar(20),
  Ciudad varchar(20),
  Biografia varchar(20),
  Redes varchar(20),
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE post (
  id int(11) NOT NULL AUTO_INCREMENT,
  contenido varchar(255) DEFAULT NULL,
  usuario_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  FOREIGN KEY (usuario_id) REFERENCES usuario(id),
  PRIMARY KEY (id)
);

CREATE TABLE comentario (
  id int(11) NOT NULL AUTO_INCREMENT,
  contenido varchar(255) DEFAULT NULL,
  usuario_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  post_id int,
  FOREIGN KEY (usuario_id) REFERENCES usuario(id),
  FOREIGN KEY (post_id) REFERENCES post(id),
  PRIMARY KEY (id)
);

CREATE TABLE megusta (
  id int(11) NOT NULL AUTO_INCREMENT,
  usuario_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  comentario_id int,
  post_id int,
  FOREIGN KEY (comentario_id) REFERENCES comentario(id),
  FOREIGN KEY (post_id) REFERENCES post(id),
  FOREIGN KEY (usuario_id) REFERENCES usuario(id),
  PRIMARY KEY (id)
);

 CREATE TABLE `admin_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
);
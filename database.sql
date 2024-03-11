CREATE DATABASE foro-lince;
USE foro-lince;

CREATE TABLE users (
    id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    name varchar(120) NOT NULL,
    email varchar(255) NOT NULL,
    pwd varchar(128) NOT NULL
);
CREATE TABLE users_data (
    id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT(20) NOT NULL,
    user_token VARCHAR(8) UNIQUE,
    permissions int(1) NOT NULL,
    store_name varchar(200) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
); 

CREATE TABLE news (
  id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
  news_title VARCHAR(255) NOT NULL,
  news_content TEXT NOT NULL,
  news_author VARCHAR(100) NOT NULL,
  news_date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  image VARCHAR(255) NULL
);

CREATE TABLE events (
  id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
  event_title VARCHAR(255) NOT NULL,
  event_description TEXT NOT NULL,
  event_date_time DATETIME NOT NULL,
  event_location VARCHAR(255) NOT NULL,
  event_image VARCHAR(255) NULL
);
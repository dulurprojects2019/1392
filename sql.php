<?php

create table users_level
(
	lvl_id int not null primary key auto_increment,
	lvl_name varchar(50) not null,
	lvl_slug varchar(50) not null,
	lvl_description text not null,
	lvl_created_at TIMESTAMP NOT NULL,
	lvl_created_by VARCHAR(50) NOT NULL,
	lvl_edited_at TIMESTAMP NOT NULL,
	lvl_edited_by VARCHAR(50) NOT NULL
)

create table users
(
	usr_id int not null primary key auto_increment,
	usr_lvl_id int not null,
	usr_fullname varchar(50) not null,
	usr_slug varchar(50) not null,
	usr_email varchar(50) not null,
	usr_password varchar(50) not null,
	usr_phone varchar(13) not null,
	usr_address text not null,
	usr_photo varchar(255) not null,
	usr_created_at TIMESTAMP NOT NULL,
	usr_created_by VARCHAR(50) NOT NULL,
	usr_edited_at TIMESTAMP NOT NULL,
	usr_edited_by VARCHAR(50) NOT NULL
);

create table iconbar
(
	icb_id int not null primary key auto_increment,
	icb_name varchar(100) not null,
	icb_slug varchar(100) not null,
	icb_image varchar(120) not null,
	icb_created_at TIMESTAMP NOT NULL,
	icb_created_by VARCHAR(50) NOT NULL,
	icb_edited_at TIMESTAMP NOT NULL,
	icb_edited_by VARCHAR(50) NOT NULL
);
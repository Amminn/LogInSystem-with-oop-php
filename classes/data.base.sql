create table users (
	user_id int(11) AUTO_INCREMENT PRIMARY key not null,
    user_uid TINYTEXT not null,
    user_pwd LONGTEXT not null,
    user_email TINYTEXT not null
)
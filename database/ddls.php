Create table members
(mem_id int not null auto_increment,
mem_name varchar(50) not null,
mem_gendr char(1)
mem_dob date,
primary key(mem_id));

Create table Movies (
    movie_id int not null auto_increment,
    movie_name varchar (60) not null,
    movie_cast varchar(100),
    movie_director varchar(60),
    movie_img_fn varchar(20),
    movie_language varchar(15),
    movie_rel_date date,
    movie_short_desc varchar(200),
    movie_summary varchar(1000),
    primary key(movie_id));


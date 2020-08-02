Create table members
(mem_id int not null auto_increment,
mem_name varchar(50) not null,
mem_gendr char(1)
mem_dob date,
mem_role enum('Admin','Owner','Customer'),
primary key(mem_id));

Create table Movies (
    movie_id int not null auto_increment,
    movie_name varchar (100) not null,
    movie_cast varchar(100),
    movie_director varchar(100),
    movie_img_fn varchar(100),
    movie_language varchar(20),
    movie_rel_date date,
    movie_short_desc varchar(300),
    movie_summary varchar(1000),
    primary key(movie_id));


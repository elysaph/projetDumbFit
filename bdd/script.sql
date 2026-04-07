create database dumbfit;
use dumbfit;

--table user classique 
create table user(
    id int  not null auto_increment,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    mail varchar (255) not null unique,
    datenaissance date not null,
    tel varchar (12) not null,
    mdp varchar (255) not null,
    taille int not null,
    obj varchar(255),
    primary key (id)
);

--table admin je l'ai appeler staff prck admin ca me le mettais en violet 
create table staff(
    id int  not null auto_increment,
    user varchar(255) not null,
    mdp varchar(255) not null,
    primary key (id)
);

-- table des domaines de sante. j'ai mis les objectif aussi ici parce que je savais pas ou le mettre

create table categorie(
    id int  not null auto_increment,
    libelle varchar(255) not null,
    objectif varchar(255) not null,
    primary key (id)
);

-- table  qui lie  les categorie au client. comme ca ca permet au client de choisir plusieur domaine sans poser de problemme dans la bdd
create table cibler(
    id int not null auto_increment,
    id_user int,
    id_categorie int,
    foreign key (id_user) references user(id),
    foreign key (id_categorie) references categorie(id),
    primary key(id)

);
-- table des proffesionelle de sante  avec  des clé etrangere  staff pour la validation et categorie pour qu'il choisi son dommaine
create table pros(
    id int  not null auto_increment,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    mail varchar (255) not null unique,
    tel varchar (12) not null,
    mdp varchar (255) not null,
    note int,
    id_staff int,
    commentaire text,
    statut int,
    licence varchar(255) not null unique,
    specialite int,
    foreign key (specialite) references categorie(id),
    foreign key (id_staff) references staff(id),
    primary key (id)
);

-- table  qui lie  les pros au client. comme ca ca permet au client d'avoir plusieur pros en meme temps sans poser de problemme dans la bdd
create table choix(
    id int not null auto_increment,
    id_user int,
    id_pros int,
    foreign key (id_user) references user(id),
    foreign key (id_pros) references pros(id),
    primary key(id)
);
--table ou tu crée les stats
create table stat(
    id int not null auto_increment,
    libelle varchar(255),
    id_categorie int not null,
    foreign key (id_categorie) references categorie(id),

    primary key(id)
);
-- table qui stocke les statistique journalier des utilisateur.
create table relever(
    id int not null auto_increment,
    id_user int not null,
    valeur float,
    id_stat int not null,
    date_stat date default current_date, 
    foreign key (id_user) references user(id),
    foreign key (id_stat) references stat(id),
    primary key(id)
);
--table qui permet de stocker l'alerte quand l'utilisateur sera en dessous du seuil et prevenir le professionelle de santé 
create table alerte(
    id int not null auto_increment,
    id_user int not null,
    id_relever int not null,
    messages varchar(255),
    id_pros int,
    foreign key (id_user) references user(id),
    foreign key (id_relever) references relever(id),
    foreign key(id_pros) references pros(id),
    primary key(id)
);
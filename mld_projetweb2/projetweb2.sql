#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        id_role    Int  Auto_increment  NOT NULL ,
        titre_role Varchar (50) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: secteur
#------------------------------------------------------------

CREATE TABLE secteur(
        id_secteur  Int  Auto_increment  NOT NULL ,
        nom_secteur Text NOT NULL
	,CONSTRAINT secteur_PK PRIMARY KEY (id_secteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_entreprise
#------------------------------------------------------------

CREATE TABLE type_entreprise(
        id_type_este  Int  Auto_increment  NOT NULL ,
        nom_type_este Varchar (50) NOT NULL
	,CONSTRAINT type_entreprise_PK PRIMARY KEY (id_type_este)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ville
#------------------------------------------------------------

CREATE TABLE ville(
        id_ville  Int  Auto_increment  NOT NULL ,
        nom_ville Varchar (50) NOT NULL
	,CONSTRAINT ville_PK PRIMARY KEY (id_ville)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_ut                Int  Auto_increment  NOT NULL ,
        nom_ut               Varchar (50) NOT NULL ,
        prenom_ut            Varchar (50) NOT NULL ,
        nom_entreprise_ut    Varchar (50) NOT NULL ,
        numero_entreprise_ut Varchar (50) NOT NULL ,
        adresse_ut           Varchar (50) NOT NULL ,
        telephone_ut         Varchar (50) NOT NULL ,
        courriel_ut          Varchar (50) NOT NULL ,
        site_web_ut          Varchar (50) NOT NULL ,
        lien_facebook_ut     Varchar (50) NOT NULL ,
        lien_linkedin_ut     Varchar (50) NOT NULL ,
        validation_ut        Bool NOT NULL ,
        suspension_ut        Bool NOT NULL ,
        mdp_ut               Varchar (50) NOT NULL ,
        competence_ut        Varchar (50) NOT NULL ,
        taux_horaire_ut      Varchar (50) NOT NULL ,
        annee_experience_ut  Varchar (50) NOT NULL ,
        disponibilite_ut     Varchar (50) NOT NULL ,
        situation_pro_ut     Varchar (50) NOT NULL ,
        apropos_ut           Varchar (250) NOT NULL ,
        neq_ut               Varchar (50) NOT NULL ,
        id_role              Int NOT NULL ,
        id_secteur           Int ,
        id_type_este         Int ,
        id_ville             Int
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id_ut)

	,CONSTRAINT utilisateur_role_FK FOREIGN KEY (id_role) REFERENCES role(id_role)
	,CONSTRAINT utilisateur_secteur0_FK FOREIGN KEY (id_secteur) REFERENCES secteur(id_secteur)
	,CONSTRAINT utilisateur_type_entreprise1_FK FOREIGN KEY (id_type_este) REFERENCES type_entreprise(id_type_este)
	,CONSTRAINT utilisateur_ville2_FK FOREIGN KEY (id_ville) REFERENCES ville(id_ville)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: projet
#------------------------------------------------------------

CREATE TABLE projet(
        id_prj               Int  Auto_increment  NOT NULL ,
        titre_prj            Varchar (50) NOT NULL ,
        type_prj             Varchar (50) NOT NULL ,
        description_prj      Varchar (50) NOT NULL ,
        lieu_realisation_prj Varchar (50) NOT NULL ,
        budget_indicatif_prj Varchar (50) NOT NULL ,
        date_debut_prj       Date NOT NULL ,
        date_fin_prj         Date NOT NULL ,
        id_ut                Int NOT NULL ,
        id_secteur           Int
	,CONSTRAINT projet_PK PRIMARY KEY (id_prj)

	,CONSTRAINT projet_utilisateur_FK FOREIGN KEY (id_ut) REFERENCES utilisateur(id_ut)
	,CONSTRAINT projet_secteur0_FK FOREIGN KEY (id_secteur) REFERENCES secteur(id_secteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: message
#------------------------------------------------------------

CREATE TABLE message(
        id_msg            Int  Auto_increment  NOT NULL ,
        message_message   Text NOT NULL ,
        titre_message     Text NOT NULL ,
        date_message      Date NOT NULL ,
        id_ut             Int NOT NULL ,
        id_ut_utilisateur Int NOT NULL
	,CONSTRAINT message_PK PRIMARY KEY (id_msg)

	,CONSTRAINT message_utilisateur_FK FOREIGN KEY (id_ut) REFERENCES utilisateur(id_ut)
	,CONSTRAINT message_utilisateur0_FK FOREIGN KEY (id_ut_utilisateur) REFERENCES utilisateur(id_ut)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: soumissioner
#------------------------------------------------------------

CREATE TABLE soumissioner(
        id_prj Int NOT NULL ,
        id_ut  Int NOT NULL ,
        tarif  Varchar (50) NOT NULL
	,CONSTRAINT soumissioner_PK PRIMARY KEY (id_prj,id_ut)

	,CONSTRAINT soumissioner_projet_FK FOREIGN KEY (id_prj) REFERENCES projet(id_prj)
	,CONSTRAINT soumissioner_utilisateur0_FK FOREIGN KEY (id_ut) REFERENCES utilisateur(id_ut)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evaluer
#------------------------------------------------------------

CREATE TABLE evaluer(
        id_ut             Int NOT NULL ,
        id_ut_utilisateur Int NOT NULL ,
        note              Int NOT NULL
	,CONSTRAINT evaluer_PK PRIMARY KEY (id_ut,id_ut_utilisateur)

	,CONSTRAINT evaluer_utilisateur_FK FOREIGN KEY (id_ut) REFERENCES utilisateur(id_ut)
	,CONSTRAINT evaluer_utilisateur0_FK FOREIGN KEY (id_ut_utilisateur) REFERENCES utilisateur(id_ut)
)ENGINE=InnoDB;


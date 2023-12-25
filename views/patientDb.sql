
CREATE TABLE IF NOT EXISTS Admin (
    id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(255) NOT NULL ,
    mail VARCHAR(255) NOT NULL , 

)
CREATE TABLE IF NOT EXISTS patient(
    id_patient INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    postnom VARCHAR (255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    age VARCHAR(255) NOT NULL ,
    email VARCHAR(255) NOT NULL ,
    contactnumber VARCHAR(255) NOT NULL ,
    height VARCHAR(255) NOT NULL,
    weight VARCHAR(255) NOT NULL,
    bloodgroup VARCHAR(255) NOT NULL ,
    bloodpressure VARCHAR(255) NOT NULL , 
    pulse VARCHAR(255) NOT NULL , 
    respiration VARCHAR(255) NOT NULL
    
    );
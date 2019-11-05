<?php
/*---------------------------------------------------------------------------
DataCase Connection Data
---------------------------------------------------------------------------*/
$servername = "localhost" ; /* Lucas 127.0.0.1 */
$rootUserName="root";
$rootPass=""; /* root */
$username = "DBQuizzUser" ;
$password = "gen03.Quizz.JLM" ;
$dbname="DBQuizz";

/*---------------------------------------------------------------------------
Database Create
---------------------------------------------------------------------------*/
try {
    $dbh = new PDO("mysql:host=$servername", $rootUserName, $rootPass); //Connection to MySql

/* DataBase Creation, User Creation with no Global Privileges but all on this DB. */
    $dbh ->exec("CREATE DATABASE IF NOT EXISTS $dbname DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_unicode_ci;
        CREATE USER IF NOT EXISTS'$username'@'$servername' IDENTIFIED BY '$password';
        GRANT ALL PRIVILEGES ON $dbname.* TO '$username'@'$servername' ;
        FLUSH PRIVILEGES;");
    
    

} catch (PDOException $exception) {
    die ($exception);
}

/*--------------------------------------------------------------------------
Table Create
--------------------------------------------------------------------------*/
/* Connecting to DataBase */
try {
    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

} catch (PDOException $exception) {
    die ($exception);
}
/* Preparing Request */
    /* Table Role */
$role= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Roles(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        nom TEXT
    )"
);
    /* Table Users */
$users= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Utilisateurs(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        pseudo TEXT NOT NULL,
        mail TEXT NOT NULL,
        password TEXT NOT NULL,
        id_Role INTEGER,
        FOREIGN KEY (id_Role) REFERENCES Roles(id)
    )"
);
    /* Table Raison_Refus */
$refus= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Refus(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        texte TEXT
    )"
);
    /* Table Status */
$status= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Status(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        nom TEXT
    )"
);
    /* Table theme */
$theme= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Themes(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        nom TEXT
    )"
);
    /* Table Questionnaire */
$questionnaire= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Questionnaires(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        nom TEXT,
        id_Auteur INTEGER,
        id_Correcteur INTEGER,
        id_Status INTEGER,
        id_Theme INTEGER,
        id_Refus INTEGER,
        FOREIGN KEY (id_Auteur) REFERENCES Utilisateurs(id),
        FOREIGN KEY (id_Correcteur) REFERENCES Utilisateurs(id),
        FOREIGN KEY (id_Status) REFERENCES Status(id),
        FOREIGN KEY (id_Theme) REFERENCES Themes(id),
        FOREIGN KEY (id_Refus) REFERENCES Refus(id)
    )"
);
    /* Table Question */
$question= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Questions(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        texte TEXT,
        id_Quest INTEGER,
        FOREIGN KEY (id_Quest) REFERENCES Questionnaires(id)
    )"
);
    /* Table Reponse */
$rep= $conn->prepare(
    "CREATE TABLE IF NOT EXISTS Reponses(
        id INTEGER AUTO_INCREMENT PRIMARY KEY, 
        texte TEXT,
        Vrai BOOLEAN,
        id_Quest INTEGER,
        FOREIGN KEY (id_Quest) REFERENCES Questions(id)
    )"
);
/* Executing request for table creation  */
    try {
        $role->execute();
        $users->execute();
        $refus->execute();
        $status->execute();
        $theme->execute();
        $questionnaire->execute();
        $question->execute();
        $rep->execute();
    } catch (PDOException $exception) {
        die ($exception);
    }


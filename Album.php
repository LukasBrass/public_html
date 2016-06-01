<?php
class Album{
    private $idAlbum;
    private $annee;
    private $genre;
    private $titre;
    function __construct($idAlbum,$titre,$genre,$annee){
        $this->idAlbum=($idAlbum);
        $this->titre=($titre);
        $this->genre=($genre);
        $this->annee=($annee);
    }
    function getIdAlbum(){
        return $this->idAlbum;
    }
    function getTitre(){
        return $this->titre;
    }
    function getGenre(){
        return $this->mdp;
    }
    function getAnnee(){
        return $this->annee;
    }
    function setTitre($new){
        return $this->Titre=($new);
    }
    function setGenre($new){
        return $this->genre=($new);
    }
    function setAnnee($new){
        return $this->annee=($new);
    }
}
$uno = new Album(1,'Bad','pop','1987');
        $pdo = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=brassele;','brassele','919704n');
      $res = $pdo->query("'select C.comment from Comm C join Album A on(C.idAlbum = A.idAlbum) where A.idAlbum ='.$idAlbum.';");
      if(!$res)
        echo "Pas de commentaires lié a cet album";
      else{
        $res->setFetchMode(PDO::FETCH_OBJ);
        foreach($res as $result)
          return $result -> comment;
}
?>
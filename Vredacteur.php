<!doctype html>
<html class="no-js" lang="">

<?php include('php/Vhead.php'); ?>

<body class="container">
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


<h3 class="text-center border border-dark rounded" style="background-color:#26a69a;">Pseudo</h3>

<form>
<div class="form-group">
    <label for="exampleFormControlSelect1" style="color : #26a69a;">Choisissez un thème</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Dessin Animé</option>
      <option>Célébrité</option>
      <option>Cinéma</option>
      <option>Humour</option>
      <option>Jeux Vidéos</option>
      <option>Manga</option>
      <option>Musique</option>
      <option>Télévision</option>
      <option>Programmation</option>
    </select>
  </div>
</form>

<p style="color : #26a69a;">Saisir ci dessous vos questions (10 questions maximum)</p>
  
<!-- <div class="container">

  <div class="row">
    <div class="col-12">
      <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color : #26a69a;">Question 1</label>
        <input class="form-control" id="exampleFormControlTextarea1" rows="1">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center ">
      <div class="col-3 form-group">
        <label for="exampleFormControlTextarea1" style="color : #26a69a;">Réponse 1</label>
        <input class="form-control" id="exampleFormControlTextarea1" rows="1">
      </div>
      <div class="col-3 form-group">
        <label for="exampleFormControlTextarea1" style="color : #26a69a;">Réponse 2</label>
        <input class="form-control" id="exampleFormControlTextarea1" rows="1">
      </div>
      <div class="col-3 form-group">
        <label for="exampleFormControlTextarea1" style="color : #26a69a;">Réponse 3</label>
        <input class="form-control" id="exampleFormControlTextarea1" rows="1">
      </div>
      <div class="col-3 form-group">
        <label for="exampleFormControlTextarea1" style="color : #26a69a;">Réponse 4</label>
        <input class="form-control" id="exampleFormControlTextarea1" rows="1">
      </div>
    </div>
  </div>

</div>   -->

<div class="input-group input-group-sm mb-3">
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>




<form class="form-inline text-right">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Statuts</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Tous</option>
    <option value="1">Accepté</option>
    <option value="2">Refusé</option>
    <option value="2">En attente</option>
  </select>
</form>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">THEME</th>
      <th scope="col">Titre du quizz</th>
      <th scope="col">Statuts</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
  </tbody>
</table>





<?php include('php/Vfooter.php'); ?>
  
</body>

</html>




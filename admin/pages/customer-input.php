<?php

include 'inc/header.php';

?>
           

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Klant toevoegen</h1>
        </div>
    </div>
    <div class="col-lg-6 col-lg-offset-1">
        <div class="row">
            <form>
              <div class="form-group">
                <label for="bedrijfsnaam">Bedrijfsnaam</label>
                <input type="text" class="form-control" name="bedrijfsnaam" id="bedrijfsnaam" placeholder="Bedrijfsnaam">
              </div>
               <div class="form-group">
                <label for="contact_naam">Contact naam</label>
                <input type="text" class="form-control" name="contact_naam" id="contact_naam" placeholder="Contact naam">
              </div>
               <div class="form-group">
                <label for="staat_nummer">Staat + nummer</label>
                <input type="text" class="form-control" name="staat_nummer" id="staat_nummer" placeholder="Staat + nummer">
              </div>
               <div class="form-group">
                <label for="plaats">Plaats</label>
                <input type="text" class="form-control" name="plaats" id="plaats" placeholder="Plaats">
              </div>
               <div class="form-group">
                <label for="email_adres">Email adres</label>
                <input type="text" class="form-control" name="email_adres" id="email_adres" placeholder="Email adres">
              </div>
               <div class="form-group">
                <label for="telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer">
              </div>
               <div class="form-group">
                <label for="kvk_nummer">KvK nummer</label>
                <input type="text" class="form-control" name="kvk_nummer" id="kvk_nummer" placeholder="KvK nummer">
              </div>
               <div class="form-group">
                <label for="btw_nummer">BTW nummer</label>
                <input type="text" class="form-control" name="btw_nummer" id="btw_nummer" placeholder="BTW nummer">
              </div>
              
              <button type="submit" class="btn btn-primary">Toevoegen</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include 'inc/footer.php';
?>

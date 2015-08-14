<?php

include 'inc/header.php';

?>
           

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Website details</h1>
        </div>
    </div>
    <div class="col-lg-6 col-lg-offset-1">
        <div class="row">
            <form>
              <div class="form-group">
                <label for="website_naam">Website naam</label>
                <input type="text" class="form-control" name="website_naam" id="website_naam" placeholder="Website naam">
              </div>
               <div class="form-group">
                <label for="directadmin_login_link">DirectAdmin login link</label>
                <input type="text" class="form-control" name="directadmin_login_link" id="directadmin_login_link" placeholder="DirectAdmin login link">
              </div>
               <div class="form-group">
                <label for="directadmin_gebruikersnaam">DirectAdmin gebruikersnaam</label>
                <input type="text" class="form-control" name="directadmin_gebruikersnaam" id="directadmin_gebruikersnaam" placeholder="DirectAdmin gebruikersnaam">
              </div>
               <div class="form-group">
                <label for="directadmin_wachtwoord">DirectAdmin wachtwoord</label>
                <input type="text" class="form-control" name="directadmin_wachtwoord" id="directadmin_wachtwoord" placeholder="DirectAdmin wachtwoord">
              </div>
               <div class="form-group">
                <label for="ftp_host">FTP host</label>
                <input type="text" class="form-control" name="ftp_host" id="ftp_host" placeholder="FTP host">
              </div>
               <div class="form-group">
                <label for="ftp_user">FTP user</label>
                <input type="text" class="form-control" name="ftp_user" id="ftp_user" placeholder="FTP user">
              </div>
               <div class="form-group">
                <label for="ftp_wachtwoord">FTP wachtwoord</label>
                <input type="text" class="form-control" name="ftp_wachtwoord" id="ftp_wachtwoord" placeholder="FTP wachtwoord">
              </div>
               <div class="form-group">
                <label for="nameserver_1">Nameserver 1</label>
                <input type="text" class="form-control" name="nameserver_1" id="nameserver_1" placeholder="Nameserver 1">
              </div>
               <div class="form-group">
                <label for="nameserver_1_ip">Nameserver 1 IP</label>
                <input type="text" class="form-control" name="nameserver_1_ip" id="nameserver_1_ip" placeholder="Nameserver 1 IP">
              </div>
               <div class="form-group">
                <label for="nameserver_2">Nameserver 2</label>
                <input type="text" class="form-control" name="nameserver_2" id="nameserver_2" placeholder="Nameserver 2">
              </div>
               <div class="form-group">
                <label for="nameserver_2_ip">Nameserver 2 IP</label>
                <input type="text" class="form-control" name="nameserver_2_ip" id="nameserver_2_ip" placeholder="Nameserver 2 IP">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include 'inc/footer.php';
?>

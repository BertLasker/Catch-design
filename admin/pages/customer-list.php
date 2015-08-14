<?php

include 'inc/header.php';

?>
           

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <h1>Manage Klanten</h1>
           <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li><a href="#">Actieve klanten <span class="badge">107</span></a></li>
                <li><a href="#">Verwijderde klanten <span class="badge">3</span></a></li>
                <li><a href="customer-input.php" class="btn btn-primary">Klant toevoegen</a></li>
                </ul>
                        
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sorteer op</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Nummer (asc)</a></li>
                  <li><a href="#">Bedrijfsnaam</a></li>
                  <li><a href="#">Plaats</a></li>
                </ul>
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Klanten Tabel</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bedrijfsnaam</th>
                      <th>Contact naam</th>
                      <th>Plaats</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th style="width: 100px">Website</th>
                      <th style="width: 55px">Edit</th>
                      <th style="width: 55px">Del</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John</td>
                      <td>Smith</td>
                      <td>@js</td>
                      <td>a@company.com</td>
                      <td>Actief</td>
                      <td>
                          <div class="btn-group">
                          <button type="button" class="btn btn-info">Actie</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="customer-website-list.php">Bekijken</a></li>
                            <li><a href="customer-website-input.php">Toevoegen</a></li>
                          </ul>
                        </div>
                      </td>
                      <td><a href="customer-edit.php" class="btn btn-success" style="width: 40px; margin-right: -45px;"><i class="fa fa-pencil-square-o"></i></a></td>
                      <td><a href="customer-delete.php" class="btn btn-danger" style="width: 40px; margin-right: -45px;"><i class="fa fa-trash"></i></a></td>
                    </tr>             
                  </tbody>
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bedrijfsnaam</th>
                      <th>Contact naam</th>
                      <th>Plaats</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th style="width: 100px">Website</th>
                      <th style="width: 55px">Edit</th>
                      <th style="width: 55px">Del</th>
                    </tr>
                  </thead>
                </table>
              </div><br><br>
              
              <ul class="pagination pull-right">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>  
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
</div>
</div>

<?php
include 'inc/footer.php';
?>

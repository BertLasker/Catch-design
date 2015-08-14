<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Bel of stuur ons een bericht</h4>
                </div>
                    <div class="modal-body text-justify">
                       U kunt ons bereiken op telefoonnummer 06-22218771. Als we u niet gelijk te woord staan dan kunt u een voicemail bericht
                       achterlaten of u kunt het formulier hierbeneden gebruiken, we bellen u dan zo snel mogelijk terug.<br><br>
                       Alle velden moeten worden ingevuld.<br><br>
                        <form name="contactform" method="post" action="inc/mailer.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Naam</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Uw Naam">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Uw Email adres">
								</div>
							</div>
							<div class="form-group">
								<label for="inputTelephone" class="col-lg-2 control-label">Telefoon</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputTelephone" name="inputTelephone" placeholder="Uw Telefoon nummer">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Onderwerp</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Onderwerp">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Bericht</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Uw bericht..."></textarea>
								</div>
							</div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Sluiten</button>
                    <button class="btn btn-primary" type="submit">Verstuur</button>
                </div>
                	</form>
        </form>
    </div>
    </div>
</div>


      <!-- Card pour les 3 données demander -->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Factures</h5>
                <p class="card-text"> <?php require "models\accueilFactures.model.php"?> </p>
                <input class="btn btn-primary" name="" type="button" onclick="self.location.href='?page=factures'" />
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Personnes</h5>
                <p class="card-text"><?php require "models\accueilPersonnes.model.php"?></p>
                <input class="btn btn-primary" name="" type="button" onclick="self.location.href='?page=clients'" />
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Entreprises</h5>
                <p class="card-text"><?php require "models\accueilSociete.model.php"?></p>
                <input class="btn btn-primary" name="" type="button" onclick="self.location.href='?page=societe'" />
              </div>
            </div>
          </div>
        </div>

      <!-- double card pour consulter les clients ou les fournisseurs -->
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
<<<<<<< HEAD
              <h5 class="card-title">Les clients</h5>
              <a href="#" class="btn btn-primary">Afficher tout les clients</a>
=======
              <h2 class="card-title">Les clients</h2>
              <a onclick="self.location.href='?page=annuaire'" class="btn btn-primary">Afficher tout les clients</a>
>>>>>>> hakan
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
<<<<<<< HEAD
              <h5 class="card-title">Les fournisseurs</h5>
              <a href="#" class="btn btn-primary">Afficher tout les fournisseurs</a>
=======
              <h2 class="card-title">Les fournisseurs</h2>
              <a onclick="self.location.href='?page=fournisseurs'" class="btn btn-primary">Afficher tout les fournisseurs</a>
>>>>>>> hakan
            </div>
          </div>
        </div>
      </div>

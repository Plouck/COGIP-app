

      <!-- Card pour les 3 données demander -->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Factures</h5>
                <p class="card-text"> <?php require "models/accueilFactures.model.php"?> </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Personnes</h5>
                <p class="card-text"><?php require "models/accueilPersonnes.model.php"?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Entreprises</h5>
                <p class="card-text"><?php require "models/accueilSociete.model.php"?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
>>>>>>> 43203796495cbc3f0156d12326e1442d26c03fd4
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
>>>>>>> 43203796495cbc3f0156d12326e1442d26c03fd4
            </div>
          </div>
        </div>
      </div>

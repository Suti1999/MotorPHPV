<link rel="stylesheet" href="./css_script/vasarlas.css"/>

<div class="container" id="vasarlas-cont">
    <div class="row">
        <!--First Col-->
        <div class="col-5">
            <!--Content Card-->
            <div class="card position-relative">
        
                <!--Card Header-->
                <div class="card-header text-center text-md-center">
                    <h1 class="mb-0 fs-5">Szállítási Adatok</h1>
                </div>

                <!--Kard Body-->
                <div class="card-body py-3">
                    <form action="#" method="post" novalidate>
                        <div class="from-group mb-4">

                            <!--Postal Code-->
                            <label for="InputPostalCode"><b>Irányítószám:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope">
                                        <img src="https://icons.iconarchive.com/icons/iconsmind/outline/128/Mail-3-icon.png" width="16" height="16">
                                    </span>
                                </span>
                                <input type="number" class="form-control" placeholder="Pl.: 4225" id="InputPostalCode" name="InputPostalCode" autofocus required>
                            </div>
                            <hr>
                            <!--City-->
                            <label for="inputCity"><b>Város:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope">
                                        <img src="https://icons.iconarchive.com/icons/iconoir-team/iconoir/128/city-icon.png" width="16" height="16">
                                    </span>
                                </span>
                                <input type="text" class="form-control" placeholder="Pl.: Debrecen" id="inputCity" name="inputCity" autofocus required>
                            </div>
                            <hr>
                            <!--Street Name-Number-->
                            <label for="inputStreetNameNumber"><b>Utcanév és Házszám:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope">
                                        <img src="https://icons.iconarchive.com/icons/bootstrap/bootstrap/16/Bootstrap-geo-alt-icon.png" width="16" height="16">
                                    </span>
                                </span>
                                <input type="text" class="form-control" placeholder="Pl.: Ispotály utca 22" id="inputStreetNameNumber" name="inputStreetNameNumber" autofocus required>
                            </div>
                            <hr>
                            <!--Floor-Door-->
                            <label for="inputFloorDoor"><b>Emelet-Ajtó:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope">
                                        <img src="https://icons.iconarchive.com/icons/bootstrap/bootstrap/16/Bootstrap-geo-alt-icon.png" width="16" height="16">
                                    </span>
                                </span>
                                <input type="text" class="form-control" placeholder="Pl.: 2/7" id="inputFloorDoor" name="inputFloorDoor">
                            </div>
                            <hr>
                            <!--Payment Method-->
                            <label><b>Fizetési mód:</b></label>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6" id="FizetesBankkartya">
                                        <img src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-3/32/payment-creditcard-visa-icon.png" width="32" height="32">
                                        <p class="FizetesiModSzoveg">Bankkártya</p>
                                        <input type="checkbox" id="Bankkártya" name="Bankkártya" value="Bankkártya">
                                    </div>
                                    
                                    <div class="col-6" id="FizetesKeszpenz">
                                        <img src="https://icons.iconarchive.com/icons/webiconset/payment/32/Cash-icon.png" width="32" height="32">
                                        <p class="FizetesiModSzoveg">Készpénz</p>
                                        <input type="checkbox" id="Készpénz" name="Készpénz" value="Készpénz">
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <br>
                        <!--Purchase Button-->
                        <div class="d-grid">
                            <button type="submit" name="VásárlásVéglegesítése" class="btn btn-primary" value="true">Vásárlás Megerősítése</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!--Second Col-->
        <div class="col-1">
            
        </div>
        
        <!--Third Col-->
        <div class="col-6">
            
        </div>
    </div>
</div>
<?php include('helpers/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Pregled rezervacija</h1>
            <div class="table-responsive-xl">
                <table class="table text-center table-bordered">
                    <thead>
                    <tr>
                        <th>+</th>
                        <th>Broj rezervacije</th>
                        <th>Automobil</th>
                        <th>Ime i prezime</th>
                        <th>Datum rodjenja</th>
                        <th>Broj telefona</th>
                        <th>E-mail</th>
                        <th>Cijena</th>
                        <th>Odobri</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                +
                            </a></td>
                        <td>1</td>
                        <td>Chevrolet Spark</td>
                        <td>Petar Petrovic</td>
                        <td>19.03.1989</td>
                        <td>+38269123456</td>
                        <td>petar.petrovic3@gmail.com</td>
                        <td><b>150€</b></td>
                        <td>
                            <button class="btn btn-success">✓</button>
                            <button class="btn btn-danger">⨯</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="hiddenRow">
                            <div class="collapse table-responsive-xl" id="collapseExample">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr class="info">
                                        <th>Datum od</th>
                                        <th>Mjesto preuzimanja</th>
                                        <th>Datum do</th>
                                        <th>Mjesto ostavljanja</th>
                                        <th>Djecija sjedista do 1 godine</th>
                                        <th>Djecija sjedista</th>
                                        <th>Booster djecija sjedista</th>
                                        <th>Kontakt aplikacija</th>
                                        <th>Dodatna poruka</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>10/04/2023 10:00</td>
                                        <td>Tivat</td>
                                        <td>15/04/2023 10:00</td>
                                        <td>Tivat</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>WhatsApp</td>
                                        <td>Pun rezervoar zelim</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                +
                            </a></td>
                        <td>1</td>
                        <td>Chevrolet Spark</td>
                        <td>Petar Petrovic</td>
                        <td>19.03.1989</td>
                        <td>+38269123456<br>+38269123456</td>
                        <td>petar.petrovic3@gmail.com</td>
                        <td><b>150€</b></td>
                        <td>
                            <button class="btn btn-success">✓</button>
                            <button class="btn btn-danger">⨯</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="hiddenRow">
                            <div class="collapse table-responsive-xl" id="collapseExample2">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr class="info">
                                        <th>Datum od</th>
                                        <th>Mjesto preuzimanja</th>
                                        <th>Datum do</th>
                                        <th>Mjesto ostavljanja</th>
                                        <th>Djecija sjedista do 1 godine</th>
                                        <th>Djecija sjedista</th>
                                        <th>Booster djecija sjedista</th>
                                        <th>Kontakt aplikacija</th>
                                        <th>Dodatna poruka</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>10/04/2023 10:00</td>
                                        <td>Tivat</td>
                                        <td>15/04/2023 10:00</td>
                                        <td>Tivat</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>WhatsApp</td>
                                        <td>Pun rezervoar zelim</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1>Dodaj auto</h1>
            <form>
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="mijenjac">Ime i model</label>
                            <input type="text" class="form-control" id="ime" placeholder="Ime i model">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="slika">Slika</label><br>
                            <input type="file" class="form-control-file" id="slika">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="cijena">Cijena po danu</label>
                            <input type="number" class="form-control" id="mijenjac" placeholder="Cijena po danu">
                        </div>
                        <div class="form-group  col-sm-4">
                            <label for="mijenjac">Mijenjac</label>
                            <input type="text" class="form-control" id="mijenjac" placeholder="Mijenjac">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="motor">Motor</label>
                            <input type="text" class="form-control" id="motor" placeholder="Motor">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="godina">Godina proizvodnje</label>
                            <input type="text" class="form-control" id="godina" placeholder="Godina proizvodnje">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="audio">Audio</label>
                            <input type="text" class="form-control" id="audio" placeholder="Audio">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="sjedista">Broj sjedista</label>
                            <input type="number" class="form-control" id="sjedista" placeholder="Broj sjedista">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="prozor">Broj prozora</label>
                            <input type="number" class="form-control" id="prozor" placeholder="Broj prozora">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="snaga">Konjska snaga</label>
                            <input type="number" class="form-control" id="snaga" placeholder="Konjska snaga">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="erbeg">Broj erbegova</label>
                            <input type="number" class="form-control" id="erbeg" placeholder="Broj erbegova">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="audio">Potrosnja</label>
                            <input type="text" class="form-control" id="potrosnja"
                                   placeholder="Format B.B l/100 km (npr. 5.0 l/100 km)">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="audio">Enterijer</label>
                            <input type="text" class="form-control" id="enterijer"
                                   placeholder="Enterijer (npr. Leather, Fabric)">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="pogon">Pogon</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pogonRadios" id="prednji" value="FWD"
                                       checked>
                                <label class="form-check-label" for="prednji">
                                    Prednji
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pogonRadios" id="zadnji" value="RWD">
                                <label class="form-check-label" for="zadnji">
                                    Zadnji
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pogonRadios" id="4x4" value="4x4">
                                <label class="form-check-label" for="4x4">
                                    Sva cetiri
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">Klima</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="klimaRadios" id="klima_da"
                                       value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="klimaRadios" id="klima_ne"
                                       value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="krov">Krov</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="krovRadios" id="standard"
                                       value="Standard"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Standard
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="krovRadios" id="standard"
                                       value="Open">
                                <label class="form-check-label" for="ne">
                                    Otvoren
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="volan">Strana volana</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="volanRadios" id="left" value="Left"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Lijeva
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="volanRadios" id="right"
                                       value="Right">
                                <label class="form-check-label" for="ne">
                                    Desna
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">ABS</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absRadios" id="abs_da" value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absRadios" id="abs_ne" value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">EBD</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ebdRadios" id="ebd_da" value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ebdRadios" id="ebd_ne" value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">ESP</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="espRadios" id="esp_da" value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="espRadios" id="esp_ne" value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">Tempomat</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tempomatRadios" id="tempomat_da"
                                       value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tempomatRadios" id="tempomat_ne"
                                       value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">Asistiranje pri parkingu</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="parkingRadios" id="parking_da"
                                       value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="parkingRadios" id="parking_ne"
                                       value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="klima">Zadnja kamera</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kameraRadios" id="kamera_da"
                                       value="yes"
                                       checked>
                                <label class="form-check-label" for="da">
                                    Da
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kameraRadios" id="kamera_ne"
                                       value="no">
                                <label class="form-check-label" for="ne">
                                    Ne
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <button type="submit" class="btn btn-primary mt-3 w-100">Dodaj auto</button>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
        </div>
        <div class="col-sm-12">
            <h1>Ukloni auto</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="border text-center p-4 d-flex justify-content-between">
                            <div>
                                <img class="mt-1 car-photo" src="assets/Chevrolet-Spark-2013-blue.png" style="width: 80%">
                            </div>
                            <div>
                                <h3 class="mt-3">Chevrolet Spark</h3>
                                <button class="btn btn-danger">Ukloni auto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

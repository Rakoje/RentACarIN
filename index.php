<?php include('helpers/header.php');
include('db.php');
$gradovi = $pdo->query("SELECT id, naziv FROM grad ORDER BY id")->fetchAll();
$res = $pdo->query("SELECT id, ime, mjenjac, audio, konjska_snaga, enterijer, abs,
                    krov, parking, ebd, slika, motor, sjedista, airbagovi, pogon, tempomat,
                    volan, esp, kamera, cijena, godiste, br_prozora, potrosnja, klima
                    FROM automobil
                    ORDER BY id")->fetchAll();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Rent a Car in Montenegro</h1>
            Pick from a variety of our vehicles with an average cost of 35€ per day
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            Pick-up
            <div>
                <select class="form-select" aria-label="Default select example">
                    <?php foreach($gradovi as $grad){?>
                    <option value="<?php echo $grad['naziv'];?>"><?php echo $grad['naziv'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            Drop-off
            <div>
                <select class="form-select" aria-label="Default select example">
                    <?php foreach($gradovi as $grad){?>
                        <option value="<?php echo $grad['naziv'];?>"><?php echo $grad['naziv'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            Rental dates
            <div>
                <input class="form-control" type="text" name="datefilter" value=""/>
            </div>
        </div>
        <div class="col-sm-2">
            <br>
            <div>
                <button class="btn btn-light" style="width: 100%">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <?php foreach ($res as $row) { ?>
            <div class="car-card col-sm-3 border">
                <button style="background: none; border: none" data-bs-toggle="modal" data-bs-target="<?php echo '#'.$row['id'];?>">
                    <img class="mt-1 car-photo" src="assets/Chevrolet-Spark-2013-blue.png" style="width:90%">
                    <h3 class="mt-3"><?php echo $row['ime']; ?></h3>
                    <small><?php echo $row['mjenjac'] . ', ' . $row['motor']; ?>, TPL</small>
                    <div class="row mt-5">
                        <div class="col-sm-12 d-flex justify-content-between">
                            <h2>150€</h2>
                            <span><?php echo $row['cijena'];?>€ a day</span>
                        </div>
                    </div>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12 text-center mb-4">
                                            <h1><?php echo $row['ime'];?></h1>
                                            <hr>
                                            <img src="<?php echo $row['image'];?>"
                                                 style="width:60%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 mt-2" id="spec">
                                            <h2 class="mb-3">Specifications</h2>
                                            <table class="table">
                                                <tr>
                                                    <th scope="row">Gear box</th>
                                                    <td><?php echo $row['mjenjac'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine</th>
                                                    <td><?php echo $row['motor'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Year of manufacture</th>
                                                    <td><?php echo $row['godiste'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Audio</th>
                                                    <td><?php echo $row['audio'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Number of seats</th>
                                                    <td><?php echo $row['sjedista'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Drive</th>
                                                    <td><?php echo $row['pogon'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Power</th>
                                                    <td><?php echo $row['konjska_snaga'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Airbags</th>
                                                    <td><?php echo $row['airbagovi'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Air Conditioning</th>
                                                    <td><?php echo $row['klima'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Roof</th>
                                                    <td><?php echo $row['krov'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tank</th>
                                                    <td>40 l</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fuel</th>
                                                    <td>Petrol</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Wheel side</th>
                                                    <td><?php echo $row['volan'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Consumption</th>
                                                    <td><?php echo $row['potrosnja'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Interior</th>
                                                    <td><?php echo $row['enterijer'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Power windows</th>
                                                    <td><?php echo $row['br_prozora'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ABS</th>
                                                    <td><?php if($row['abs']) echo "Yes";
                                                                else echo "No";?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">EBD</th>
                                                    <td><?php if($row['ebd']) echo "Yes";
                                                        else echo "No";?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ESP</th>
                                                    <td><?php if($row['esp']) echo "Yes";
                                                        else echo "No";?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cruise control</th>
                                                    <td><?php if($row['tempomat']) echo "Yes";
                                                        else echo "No";?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Parking assist</th>
                                                    <td><?php if($row['parking']) echo "Yes";
                                                        else echo "No";?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rear view camera</th>
                                                    <td><?php if($row['kamera']) echo "Yes";
                                                        else echo "No";?></td>
                                                </tr>
                                            </table>
                                            <h2 class="mb-3">Requirements</h2>
                                            <table class="table">
                                                <tr>
                                                    <th colspan="row">Driver's age</th>
                                                    <td>20 - 70 years</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="row">Minimum driving experience</th>
                                                    <td>2 years</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="row">Mileage limit</th>
                                                    <td>No</td>
                                                </tr>
                                            </table>
                                            <h2 class="mb-3">Additional services</h2>
                                            <table class="table">
                                                <tr>
                                                    <th colspan="row">Child safety seat (up to 1 year old)</th>
                                                    <td>
                                                        <input type="number" id="css" min="0"
                                                               max="3" onchange="childSafetySeat()"/>
                                                        4€ per seat
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="row">Child seat</th>
                                                    <td>
                                                        <input type="number" id="cs" name="tentacles" min="0"
                                                               max="3" onchange="childSeat()"/>
                                                        4€ per seat
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="row">Child Booster seat</th>
                                                    <td>
                                                        <input type="number" id="cbs" name="tentacles" min="0"
                                                               max="3" onchange="childBoosterSeat()"/>
                                                        4€ per seat
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="row">Second driver</th>
                                                    <td>Free of charge</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-sm-7 mt-2" id="booking-form" style="display: none">
                                            <div class='d-flex justify-content-between' id="booking-form">
                                                <div><h2 class='mb-3'>Pick-up</h2></div>
                                                <div class='pt-3'>Tivat, <b>April 10</b></div>
                                            </div>
                                            <div>
                                                <div>Pick-up place
                                                    <div>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <?php foreach($gradovi as $grad){?>
                                                                <option value="<?php echo $grad['naziv'];?>"><?php echo $grad['naziv'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>Pick-up time</div>
                                                <input class='form-control' type='text' value='10:00'>
                                            </div>
                                            <div class='d-flex justify-content-between mb-3 mt-3'>
                                                <div><h2>Drop-off</h2></div>
                                                <div class='pt-3'>Tivat, <b>April 15</b></div>
                                            </div>
                                            <div>
                                                <div>Drop-off place
                                                    <div>
                                                        <div>
                                                            <select class="form-select"
                                                                    aria-label="Default select example">
                                                                <?php foreach($gradovi as $grad){?>
                                                                    <option value="<?php echo $grad['naziv'];?>"><?php echo $grad['naziv'];?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>Drop-off time</div>
                                                    <input class='form-control' type='text' value='10:00'>
                                                </div>
                                            </div>
                                            <h2 class='mb-3 mt-3'>Driver's information</h2>
                                            <input class='form-control mb-3' type='text' id="name"
                                                   placeholder='Full name in Latin without accents *'>
                                            <input class='form-control mb-3' type='text' id="birthday"
                                                   placeholder='Date of birth in DD.MM.YYYY. format *'>
                                            <input class='form-control mb-3' type='email' placeholder='E-mail *'>
                                            <input class='form-control mb-3' type='text' id="phone"
                                                   placeholder='Phone number with country code *'>
                                            <small>Please specify instant messengers on this phone number you wish to be
                                                contacted at.</small>
                                            <div class='d-flex justify-content-between mt-3 mb-3'>
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                           value="telegram"
                                                           id="telegramCheck">
                                                    <label class="form-check-label" for="telegram">
                                                        Telegram
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                           value="whatsapp"
                                                           id="whatsappCheck">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        WhatsApp
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="viber"
                                                           id="viberCheck">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Viber
                                                    </label>
                                                </div>
                                            </div>
                                            <input class='form-control mb-3' type='text' id="additional-phone"
                                                   placeholder='Additional phone number with country code'>
                                            <small>Please specify instant messengers on this phone number you wish to be
                                                contacted at.</small>
                                            <div class='d-flex justify-content-between mt-3 mb-3'>
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                           value="telegram2"
                                                           id="telegramCheck">
                                                    <label class="form-check-label" for="telegram">
                                                        Telegram
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                           value="whatsapp2"
                                                           id="whatsappCheck">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        WhatsApp
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="viber2"
                                                           id="viberCheck">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Viber
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                            <textarea class="form-control" id="notes"
                                                      placeholder="Additional notes..." rows="3"></textarea>
                                            </div>
                                            <div class="mt-3">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       id="terms">
                                                <label class="form-check-label" for="terms">
                                                    I agree <a href="#">the Terms of use</a>
                                                </label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       id="policy">
                                                <label class="form-check-label" for="terms">
                                                    I have read <a href="#">the Privacy policy</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 mt-2">
                                            <div class="sticky">
                                                <div>
                                                    <h2>Cost</h2>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <b>Rent for 5 days</b>
                                                        <br>
                                                        Tivat, April 10 - 15
                                                    </div>
                                                    <div>
                                                        <b>150€</b>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div><b>Other</b></div>
                                                <div class="justify-content-between" id="child-safety-seat-price"
                                                     style="display: none">
                                                    <div>Child safety seat (up to 1 year old)</div>
                                                    <div id="child-safety-seat"></div>
                                                </div>
                                                <div class="justify-content-between" id="child-seat-price"
                                                     style="display: none">
                                                    <div>Child seat</div>
                                                    <div id="child-seat"></div>
                                                </div>
                                                <div class="justify-content-between" id="child-booster-seat-price"
                                                     style="display: none">
                                                    <div>Child Booster seat</div>
                                                    <div id="child-booster-seat"></div>
                                                </div>
                                                <hr style="border: 2px solid blue !important;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <b>Total</b>
                                                    </div>
                                                    <div>
                                                        <b>150€</b>
                                                    </div>
                                                </div>
                                                <div class="mt-3" id="proceed">
                                                    <button class="btn btn-primary p-3" style="width: 100%"
                                                            onclick="changeBookingForm()">
                                                        Proceed to booking form
                                                    </button>
                                                </div>
                                                <div class="mt-3" id="go-back" style="display: none">
                                                    <button class="btn btn-primary p-3" style="width: 100%"
                                                            onclick="fileBooking()">
                                                        Book now
                                                    </button>
                                                    <button class="btn btn-light p-3 mt-2" style="width: 100%"
                                                            onclick="backToSpecs()">
                                                        Back to car specifications
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
<script>
    function changeBookingForm() {
        let spec = document.getElementById("spec");
        let bookingForm = document.getElementById("booking-form");
        let proceed = document.getElementById("proceed");
        let back = document.getElementById("go-back");

        spec.style["display"] = 'none';
        bookingForm.style["display"] = 'block';
        proceed.style["display"] = 'none';
        back.style["display"] = 'block';
    }

    function backToSpecs() {
        let spec = document.getElementById("spec");
        let bookingForm = document.getElementById("booking-form");
        let proceed = document.getElementById("proceed");
        let back = document.getElementById("go-back");

        spec.style["display"] = 'block';
        bookingForm.style["display"] = 'none';
        proceed.style["display"] = 'block';
        back.style["display"] = 'none';
    }

    function childSafetySeat() {
        var input = document.getElementById('css');
        var val = input.value

        console.log("Input value changed to: " + val);
        let div = document.getElementById('child-safety-seat-price');
        let price = document.getElementById('child-safety-seat');

        if (val > 0) {
            div.style["display"] = 'flex';
            price.innerHTML = "<b>" + val * 4 + "€</b>";
        } else {
            div.style["display"] = 'none';
        }
    }

    function childSeat() {
        var input = document.getElementById('cs');
        var val = input.value

        console.log("Input value changed to: " + val);
        let div = document.getElementById('child-seat-price');
        let price = document.getElementById('child-seat');

        if (val > 0) {
            div.style["display"] = 'flex';
            price.innerHTML = "<b>" + val * 4 + "€</b>";
        } else {
            div.style["display"] = 'none';
        }
    }

    function childBoosterSeat() {
        var input = document.getElementById('cbs');
        var val = input.value

        console.log("Input value changed to: " + val);
        let div = document.getElementById('child-booster-seat-price');
        let price = document.getElementById('child-booster-seat');

        if (val > 0) {
            div.style["display"] = 'flex';
            price.innerHTML = "<b>" + val * 4 + "€</b>";
        } else {
            div.style["display"] = 'none';
        }
    }
</script>

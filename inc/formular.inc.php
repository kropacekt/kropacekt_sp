<div class="container">
    <form id="filtrace" method="post">
        <div class="form-group row">
            <div class="col-sm-10">
                <h1>Filtrace výrobků</h1>
            </div>
        </div>

        <div class="form-group row">
            <label for="vyrobce" class="col-sm-2 col-form-label" >Typ:</label>
            <div class="col-xs-3">
                <select name="typ" class="form-control">
                    <option value="vse">vše</option>
                    <?php
                        foreach($typy as $typ) {
                            echo '<option value="'.$typ.'">'.$typ.'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="typ" class="col-sm-2 col-form-label" >Jednotky:</label>
            <div class="col-xs-3">

                <select name="jednotky" class="form-control">
                    <option value="vse">vše</option>
                    <?php
                        foreach($jednotky as $jednotka) {
                            echo '<option value="'.$jednotka.'">'.$jednotka.'</option>';
                        }
                    ?>
                </select>

            </div>
        </div>

        <div class="form-group row">
            <label for="slider" class="col-sm-2 col-form-label">Filtruj podle ceny:</label>
            <div class="col-xs-8">
                <div id="slider"></div>
            </div>
        </div>

        <fieldset class="form-group row">

            <legend class="col-form-legend col-sm-2">Cenové rozpětí</legend>

            <div class="col-sm-10 ">
                <div class="form-check col-xs-3">
                    <label for="cenaOd" class="col-form-label" >Cena od:</label>
                    <input type="number" class="form-control" name="cenaOd" id="cenaOd" value="<?php echo isset($_POST['cenaOd']) ? $_POST['cenaOd'] : '' ?>">
                </div>

                <div class="form-check col-xs-3">
                    <label for="cenaDo" class="col-form-label" >Cena do:</label>
                    <input type="number" class="form-control" name="cenaDo" id="cenaDo">
                </div>
            </div>

        </fieldset>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-1">
                <button type="submit" class="btn btn-primary">Vypsat výrobky</button>
            </div>
        </div>

        <div id="vypisFiltrace"></div>

    </form>

    <div class="modal"></div>

</div>
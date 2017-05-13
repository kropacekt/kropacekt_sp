
<div class="container">
    <form action="uvod.php?akce=filtrovat&filtrace=ano" method="get">

        <div class="form-group row">
            <div class="col-sm-10">
                <h1>Filtrace výrobků</h1>
            </div>
        </div>

        <div class="form-group row">
            <label for="vyrobce" class="col-sm-2 col-form-label" >Výrobce:</label>
            <div class="col-sm-10">
                <!--potreba z dtb substringem plnit-->
                <select name="vyrobce" class="form-control">
                    <option>Default select</option>
                    <option>Default select</option>
                    <option>Default select</option>
                    <option>Default select</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="typ" class="col-sm-2 col-form-label" >Jednotky:</label>
            <div class="col-sm-10">

                <select name="jednotky" class="form-control">
                    <?php
                        foreach($_SESSION['data'] as $jednotky) {
                            echo '<option value="'.$jednotky.'">'.$jednotky.'</option>';
                        }
                    ?>
                </select>

            </div>
        </div>

        <div class="form-group row">
            <label for="slider" class="col-sm-2 col-form-label">Filtruj podle ceny:</label>
            <div class="col-sm-10">
                <div id="slider"></div>
            </div>
        </div>

        <fieldset class="form-group row">

            <legend class="col-form-legend col-sm-2">Cenové rozpětí</legend>

            <div class="col-sm-10">
                <div class="form-check">
                    <label for="cenaOd" class="col-sm-2" >Cena od:</label>
                    <input type="number" name="cenaOd" id="cenaOd">
                </div>

                <div class="form-check">
                    <label for="cenaDo" class="col-sm-2 col-form-label" >Cena do:</label>
                    <input type="number" name="cenaDo" id="cenaDo">
                </div>
            </div>

        </fieldset>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-1">
                <button type="submit" class="btn btn-primary">Vypsat výrobky</button>
            </div>
        </div>

    </form>
</div>
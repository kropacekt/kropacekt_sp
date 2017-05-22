<div class="container">
    <form id="pridani" method="post">

        <div class="form-group row">
            <div class="col-sm-10">
                <h1>Přidání výrobku</h1>
            </div>
        </div>

        <div class="form-group row">
            <label for="typ" class="col-sm-2 col-form-label" >Typ:</label>
            <div class="col-xs-3">
                <input class="form-control" type="text" name="typ" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="typ" class="col-sm-2 col-form-label" >Jednotky:</label>
            <div class="col-xs-3">

                <select name="jednotky" class="form-control">
                    <?php
                        foreach($jednotky as $jednotka) {
                            echo '<option value="'.$jednotka.'">'.$jednotka.'</option>';
                        }
                    ?>
                </select>

            </div>
        </div>

        <div class="form-group row">
            <label for="cena" class="col-sm-2 col-form-label" >Cena:</label>
            <div class="col-xs-3">
                <input type="number" min="0" class="form-control" name="cena" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-1">
                <button type="submit" class="btn btn-primary">Přidat výrobek</button>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-1">
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>

    </form>

    <div class="alert alert-info col-sm-5 kropihoAlertik" style="display: none; text-align: center;"></div>

</div>
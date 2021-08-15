<?php ?>

<div class="container">
    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="inputEmail4">Systolic</label>
            <input type="number" name="sys" class="form-control" id="inputEmail4" placeholder="">


            <label for="inputPassword4">Diastolic</label>
            <input type="number" name="dia" class="form-control" id="inputPassword4" placeholder="">


            <label for="inputAddress">Date</label>
            <input type="date" name="date" class="form-control" id="inputAddress2" placeholder="">


            <label for="inputAddress2">Time</label>
            <input type="time" name="time" class="form-control" id="inputAddress" placeholder="Optional">


            <br>

            <button type="submit" class="btn btn-primary" name="add">Add Record</button>
        </div>
    </form>
</div>
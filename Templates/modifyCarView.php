<div class="container">


<h1> Auto modositás</h1>



<form method="POST" action="index.php?page=modifyCar&id=<?php echo $car["id"] ?>">


<div class="form-group">
    <label for="producer">
        Producer
    </label>
    
    <input type="text" name="producer" id="producer" value="<?php echo $car["producer"] ?>" class="form-control">
</div>



<div class="form-group">
    <label for="type">
        Type
    </label>
    
    <input type="text" name="type" id="type" value="<?php echo $car["type"] ?>" class="form-control">
</div>



<div class="form-group">
    <label for="vintage">
        Vintage
    </label>
    
    <input type="text" name="vintage" id="vintage" value="<?php echo $car["vintage"] ?>" class="form-control">
</div>


<div class="form-group">
    <label for="fuel">
        Fuel
    </label>
    
    <input type="text" name="fuel" id="fuel" value="<?php echo $car["fuel"] ?>" class="form-control">
</div>

<div class="form-group">
    <input type="submit" value="Save" class="btn btn-primary">
</div>


</form>




















</div>

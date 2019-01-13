<div class="card text-center">
    <div class="card-header">
        <h2><?php echo $row['name']; ?></h2>
        <img src="images/<?php echo $row['photo']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
    </div>
    <div class="card-body">
        <h4 class="card-title">Description</h4>
        <p class="card-text"><?php echo $row['description']; ?></p>
        <h4 class="card-title">Threats</h4>
        <p class="card-text"><?php echo $row['threats']; ?></p>  
    </div>
</div>
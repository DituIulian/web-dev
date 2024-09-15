 <?php
    // PHP movie counter

    foreach ($movies as $movie) {
    ?>
     <!-- HTML Movie Card -->
     <div class="col-md-4" id="<?php echo $movie['id']; ?>">
         <?php echo $movie['id']; ?>
         <img class=" card-img-top img-thumbnail" src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?>">
         <div class="card-body ">
             <h5 class="card-title"><?php echo $movie['title']; ?></h5>
             <span class="card-subtitle text-primary"><?php echo $movie['genre']; ?></span>
             <p class="card-text"><?php echo $movie['description'] . "..."; ?></p>
         </div>
         <div class="card-footer">
             <a href="<?php echo $movie['permalink']; ?>"> <button class="btn btn-success">Read More </button></a>
         </div>
     </div>

 <?php }  ?>
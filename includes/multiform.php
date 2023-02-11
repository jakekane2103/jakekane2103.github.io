<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

<button id="showForm1">Show Form 1 </button>
<button id="showForm2"> Show Form 2 </button>

<section class="forms">


<form id="form1">
               
               <div class="form-group">
                   <label for="nazov">Name</label>
                   <input type="text" class="form-control" name="nazov" />
               </div>

               <div class="form-group">
                   <label for="img">Image</label>
                   <input type="text" class="form-control" name="img" />
               </div>

               <div class="form-group">
                   <label for="autor">Author</label>
                   <input type="text" class="form-control"  name="autor" />
               </div>

               <div class="form-group">
                   <label for="cena">Price</label>
                   <input type="text" class="form-control"  name="cena" />
               </div>

               <div class="form-group">
                   <label for="rating">Rating</label>
                   <input type="text" class="form-control"  name="rating" />
               </div>

               <div class="form-group">
                   <label for="pocetRating">Number of Ratings</label>
                   <input type="text" class="form-control"  name="pocetRating" />
               </div>

               <div class="form-group">
                   <label for="linkRating">Link Rating</label>
                   <input type="text" class="form-control"  name="linkRating" />
               </div>

               <div class="form-group">
                   <label for="description">Descritpion</label> <br>
                   <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
               </div>

               <div class="form-group">
                   <label for="pocetStran">Number of Pages</label>
                   <input type="text" class="form-control"  name="pocetStran" />
               </div>

               <div class="form-group">
                   <label for="year">Release Date</label>
                   <input type="date" class="form-control"  name="year" />
               </div>
          
               <div class="formBtn">
                   <button type="submit" name="submit">ADD BOOK</button>
               </div>
 
</form>


<form id="form2" style="display:none;">
<div class="form-group">
                        <label for="nazov">Name</label>
                        <input type="text" class="form-control" name="nazov" />
                    </div>

                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="text" class="form-control" name="img" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Director</label>
                        <input type="text" class="form-control"  name="director" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Composer</label>
                        <input type="text" class="form-control"  name="composer" />
                    </div>

                    <div class="form-group">
                        <label for="cast0">Cast 1</label>
                        <input type="text" class="form-control"  name="cast0" />
                    </div>

                    <div class="form-group">
                        <label for="cast1">Cast 2</label>
                        <input type="text" class="form-control"  name="cast1" />
                    </div>

                    <div class="form-group">
                        <label for="cast2">Cast 3</label>
                        <input type="text" class="form-control"  name="cast2" />
                    </div>

                    <div class="form-group">
                        <label for="cena">Price</label>
                        <input type="text" class="form-control"  name="cena" />
                    </div>
               
                    <div class="formBtn">
                        <button type="submit" name="submitMovie">ADD MOVIE</button>
                    </div>
</form>

</section>


<script>
  $("#showForm1").click(function() {
    $("#form1").show();
    $("#form2").hide();
  });

  $("#showForm2").click(function() {
    $("#form2").show();
    $("#form1").hide();
  });
</script>

</body>
</html>


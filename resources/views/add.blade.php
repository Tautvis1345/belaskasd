<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
   

    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          
          <form action="/pagrindinis">
            <input type="submit" value="pagrindinis" />
        </form>

        <form action="/add">
            <input type="submit" value="Add" />
        </form>
    
       
          <form action="/sportas">
            <input type="submit" value="Sportas" />
        </form>
        
        <form action="/laisvalaikis">
            <input type="submit" value="Laisvalaikis" />
        </form>

        <form action="/ekstremalus">
            <input type="submit" value="Ekstremalus pojūčiai" />
        </form>

       
        </div>
      </nav>


	<div class="text-center">
		<h1>Pridėti!</h1> </div>
	<hr>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Kategorija</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""> </div>
	<select class="form-select" aria-label="Default select example">
		<option selected>Pasirinkti</option>
		<option value="1">For kids</option>
		<option value="2">LongBoard</option>
		<option value="3">Electric LongBoard</option>
	</select>
	<br>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">kaina</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""> </div> <a class="btn btn-success" href="#" role="button">Sukurti</a> </body>

    </body>
</html>
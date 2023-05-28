<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
   
    <h1 style="text-align: center">Form HTML Pada PHP</h1>

        <form action="{{url('output')}}" method="POST">
          @csrf
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="email">Email</label> 
            <div class="col-8">
              <input id="email" name="email" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
            <div class="col-8">
              <select id="lokasi" name="lokasi" class="custom-select" required="required">
                <option value="Jakarta">Jakarta</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
                <option value="Bekasi">Bekasi</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="Laki-Laki"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="Perempuan"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Skill</label> 
            <div class="col-8">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="skill_0" type="checkbox" class="custom-control-input" value="PHP"> 
                <label for="skill_0" class="custom-control-label">PHP</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="skill_1" type="checkbox" class="custom-control-input" value="MySQL"> 
                <label for="skill_1" class="custom-control-label">MySQL</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="skill_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
                <label for="skill_2" class="custom-control-label">JavaScript</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="skill_3" type="checkbox"  class="custom-control-input" value="HTML"> 
                <label for="skill_3" class="custom-control-label">HTML</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="skill_4" type="checkbox"  class="custom-control-input" value="CSS"> 
                <label for="skill_4" class="custom-control-label">CSS</label>
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        
      
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
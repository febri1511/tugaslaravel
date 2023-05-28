<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

    <h1 style="text-align: center">Hasil Input</h1>
      <table class="table">
        <thead class="table-dark">
        <tr>
            <td>Nama</td>
            <td>Email</td>
            <td>Lokasi</td>
            <td>Jenis Kelamin</td>
            <td>Skill</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data ['nama'] }} </td>
                <td>{{ $data ['email'] }} </td>
                <td>{{ $data ['lokasi'] }} </td>
                <td>{{ $data ['jk'] }} </td>
                <td>
                  <ul>
                      @foreach ($data['skill'] as $item)
                         <li>
                            {{$item}}  
                        </li> 
                      @endforeach  
                  </ul>  
                </td>                
            </tr>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
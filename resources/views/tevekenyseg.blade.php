<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pfiffer Attila</title>
</head>
<body>
  <h1>TODO</h1>
<div class="container">
  <h2>Tevékenységek</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>kat_id</th>
        <th>tev_nev</th>
        <th>allapot</th>
        <th>Művelet</th>
      </tr>
    </thead>
    <tbody>
        @forelse($tevekenysegek as $tevekenyseg)
      <tr>
        <td>{{$tevekenyseg->id}}</td>
        <td>{{$tevekenyseg->kat_id}}</td>
        <td>{{$tevekenyseg->tev_nev}}</td>
        <td>{{$tevekenyseg->allapot}}</td>
        <td class="">
                <form action="{{route('tevekenyseg_torles', $tevekenyseg->id)}}" method="POST">
                   @csrf
                  @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Biztosan törölni szeretnéd?')">Törlés</button>
                </form>
       </td>
      </tr>
      @empty
                <tr>
                    <td colspan="5" class="text-center">Nincsenek felhasználók.</td>
                </tr>
      @endforelse
    </tbody>
  </table>

  <form action="/action_page.php">
          <label for="kat_id">Kategoria</label><br>
          <input type="text" id="kat_id" name="kat_id"><br>
          <label for="tev_nev">Tevékenység neve: </label><br>
          <input type="text" id="tev_nev" name="tev_nev"><br><br>
          <label for="allapot">Állapot: </label><br>
          
</form>


<form action="{{ route('tevekenysegek_felvitel')}}" method = "POST">
          @csrf
          <select name="allapot" id="allapot">
            <option value="" Disabled selected>"Állítsa be az állapotát..."</option>
              
                <option value="" {{ $tevekenyseg->allapot === 'aktiv' ? 'selected' : '' }}>inaktiv</option>
                <option value="" {{ $tevekenyseg->allapot === 'inaktiv' ? 'selected' : '' }}>aktiv</option>
          </select>
          <input type="submit" value="Submit">

</form>


</div>


<footer>Pfiffer Attila</footer>
</body>
</html>






<div>
    <table>
  <tr>
    <th>Név</th>
    <th>Város</th>
    <th>Születés</th>
    <th>Fizetés</th>
  </tr>
  @foreach($workers as $worker)
    <tr>
    <td>{{$worker->name}}</td>
    <td>{{$worker->city}}</td>
    <td>{{$worker->birthdate}}</td>
    <td>{{$worker->salary}}</td>
    </tr>
    @endforeach
</table>
</div>
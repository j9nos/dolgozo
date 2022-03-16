<div>
@include("search")
@if(count($workers))
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

                <form action="{{route('modify', $worker)}}" method="GET">
                    <td><button>módosítás</button></td>
                </form>

                <form action="{{route('kick', $worker)}}" method="POST">
                @method('DELETE')  
                @csrf
                    <td><input type="submit" value="törlés"/></td>
                </form>
        </tr>
        @endforeach
    </table>
@else
    <p>Nincs még dolgozó</p>
@endif
</div>
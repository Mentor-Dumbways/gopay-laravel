<!DOCTYPE html>
<html>

<body>

    <h1>Dumbways</h1>

    <p>Demo cek ongkir.</p>

    <form method="POST" action="{{ route('cost') }}">
        @csrf
        <label for="asal">Asal:</label>
        <select name="asal" id="asal">
            @foreach ($data as $item)
                <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="tujuan">Tujuan:</label>
        <select name="tujuan" id="tujuan">
            @foreach ($data as $item)
                <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="weight">Weight (gram):</label>
        <input type="number" id="weight" name="weight" min="1" max="100000">

        <label for="courier">Kurir:</label>
        <select name="courier" id="courier">
            <option value="jne">JNE</option>
            <option value="pos">POS Indonesia</option>
            <option value="tiki">TIKI</option>
        </select>
        <br><br>

        <input type="submit" value="Cek Ongkir">
    </form>

    <p><b>Tarif Ongkir :</b></p>
    @if ($cost != null)
        @foreach ($cost as $item)
            {{ $item['service'] }} - {{ $item['cost'][0]['value'] }} <br>
        @endforeach
    @else
        0
    @endif


</body>

</html>

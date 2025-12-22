<h2>Oil Change Checker</h2>

<form method="POST" action="/check">
    @csrf

    <label>Current Odometer</label><br>
    <input type="number" name="current_odometer" required><br><br>

    <label>Odometer at Previous Oil Change</label><br>
    <input type="number" name="previous_odometer" required><br><br>

    <label>Date of Previous Oil Change</label><br>
    <input type="date" name="previous_oil_change_date" required><br><br>

    <button type="submit">Check</button>
</form>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

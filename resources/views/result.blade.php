<h2>Oil Change Result</h2>

<p><strong>Current Odometer:</strong> {{ $oilCheck->current_odometer }}</p>
<p><strong>Previous Odometer:</strong> {{ $oilCheck->previous_odometer }}</p>
<p><strong>Previous Oil Change Date:</strong> {{ $oilCheck->previous_oil_change_date }}</p>

<hr>

@if ($needsOilChange)
    <h3 style="color:red">🚗 Oil change is required</h3>
@else
    <h3 style="color:green">✅ Oil change is NOT required</h3>
@endif

<p>Kilometers since last change: {{ $kmDiff }}</p>
<p>Months since last change: {{ $monthsDiff }}</p>

<br>
<a href="/">Check another car</a>


<div class="row">
    <div class="card-body">
        <h2>Booking Flight</h2>
        <hr>
        <form id="flight-selection-form">
            <div class="form-group col-md-5">
                <label for="exampleFormControlSelect1">Choose <b>Departure Airport</b></label>
                <select class="form-control" id="departureAirport" name = "departureAirport" >
                    {airports}
                        <option value={id}>{id}</option>
                    {/airports}
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="exampleFormControlSelect1">Choose <b>Destination Airport</b></label>
                <select class="form-control" id="arrivalAirport" name = "arrivalAirport" >
                    {airports}
                        <option value={id}>{id}</option>
                    {/airports}
                </select>
            </div>
            <div class="form-group col-md-5">
                <button type="button" class="btn btn-primary pull-right" onclick="displayVals(event)">Show</button>
            </div>
        </form>
      <br><br>
        <table class="table" id="flight-match-table" style="display:none;">
            <thead>
            <tr>
                <th>Option</th>
                <th>Departure</th>
                <th>Departure Time</th>
                <th>Arrival</th>
                <th>Arrival Time</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    function displayVals(event) {
        if(document.getElementById('departureAirport').value == document.getElementById('arrivalAirport').value) {
            alert('Cannot arrive and depart at the same airport')
            return;
        }
        var formData = $('#flight-selection-form').serialize()
        $.post({
            url:'/flightbookings/matchFlights',
            type:'POST',
            data:formData,
            success: (campaigns) => {
                var table = document.getElementById('flight-match-table');
                $('tbody').remove();
                var count = 0;
                for(var match in campaigns) {
                    count++;
                    var rowspan = campaigns[match].length;
                    var body = document.createElement('TBODY');
                    for(var item in campaigns[match]) {
                        var flightinfo = campaigns[match][item];
                        var flightOptionNumber = document.createElement('TD');
                        if(item == 0) {
                            flightOptionNumber.innerHTML = count;
                            flightOptionNumber.rowSpan = rowspan;
                        }
                        var bodyDestination = document.createElement('TD');
                        bodyDestination.innerHTML = flightinfo['departureAirport'];

                        var bodyArrival = document.createElement('TD');
                        bodyArrival.innerHTML = flightinfo['arrivalAirport'];

                        var bodyDepartTime = document.createElement('TD');
                        bodyDepartTime.innerHTML = flightinfo['departureTime'];

                        var bodyArrivalTime = document.createElement('TD');
                        bodyArrivalTime.innerHTML = flightinfo['arrivalTime'];

                        var row = document.createElement('TR');
                        if(item == 0) {row.appendChild(flightOptionNumber) };

                        row.appendChild(bodyDestination);
                        row.appendChild(bodyDepartTime);
                        row.appendChild(bodyArrival);
                        row.appendChild(bodyArrivalTime);
                        body.appendChild(row);
                        table.append(body);
                        table.style.display = 'block';
                    }
                }
            },
            error: (error) => {
                console.log(error);
            },
        });
    }

</script>
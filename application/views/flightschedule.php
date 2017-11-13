<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Departure Airport</th>
                        <th>Arrival Airport</th>
                        <th>Plane</th>
                    </tr>
                </thead>
                <tbody>
                    {flights}
                        <tr>
                            <td><a href="/fleet/detail/{plane}">{id}</a></td>
                            <td>{departureTime}</td>
                            <td>{arrivalTime}</td>
                            <td>{departureAirport}</td>
                            <td>{arrivalAirport}</td>
                            <td>{plane}</td>
                        </tr>
                    {/flights}
                </tbody>
            </table>
        </div>
    </div>
</div>
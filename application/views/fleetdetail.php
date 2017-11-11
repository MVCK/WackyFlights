<form name ="userinput" action="/fleet/detail/submit/" method="post">
<div style="overflow:scroll;" class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-default" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Plane Name</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Seats</th>
                        <th>Reach</th>
                        <th>Cruise</th>
                        <th>Takeoff</th>
                        <th>Hourly</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                        <td><input name="id" value="{id}"></td>
                        <td><input name="planeName" value="{planeName}"/></td>
                        <td><input name="manufacturer" value="{manufacturer}"/></td>
                        <td><input name="model" value="{model}"/></td>
                        <td><input name="price" value="{price}"/></td>
                        <td><input name="seats" value="{seats}"/></td>
                        <td><input name="reach" value="{reach}"/></td>
                        <td><input name="cruise" value="{cruise}"/></td>
                        <td><input name="takeoff" value="{takeoff}"/></td>
                        <td><input name="hourly" value="{hourly}"/></td>
                    </tbody>
            <table/>
                <div class="text-center">
                <a href="/fleet">Go back</a>
                </div>
        </div>

    </div>
</div>
<button type="submit">Submit</button>
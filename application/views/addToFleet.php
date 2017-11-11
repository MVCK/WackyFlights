<form name ="userinput" action="/fleet/add/submit/" method="post">
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
                        <td><input name="id"></td>
                        <td><input name="planeName"></td>
                        <td><input name="manufacturer"></td>
                        <td><input name="model"></td>
                        <td><input name="price"></td>
                        <td><input name="seats"></td>
                        <td><input name="reach"></td>
                        <td><input name="cruise"></td>
                        <td><input name="takeoff"></td>
                        <td><input name="hourly"></td>
                    </tbody>
            <table/>
                <div class="text-center">
                <a href="/fleet">Go back</a>
                </div>
        </div>

    </div>
</div>
<div>   </div>
<button type="submit">Add</button>
</form>
<form name ="userinput" action="/fleet/add/submit/" method="post">
<div style="overflow:scroll;" class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-default" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <td><input name="id"></td>
                </tr>
                <tr>
                    <th>Plane Name</th>
                    <td><input name="planeName"/></td>
                </tr>
                <tr>
                    <th>Manufacturer</th>
                    <td><input name="manufacturer"/></td>
                </tr>
                <tr>
                    <th>Model</th>
                    <td><input name="model" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input name="price" /></td>
                </tr>
                <tr>
                    <th>Seats</th>
                    <td><input name="seats"/></td>
                </tr>
                <tr>
                    <th>Reach</th>
                    <td><input name="reach" /></td>
                </tr>
                <tr>
                    <th>Cruise</th>
                    <td><input name="cruise" /></td>
                </tr>
                <tr>
                    <th>Takeoff</th>
                    <td><input name="takeoff" /></td>
                </tr>
                <tr>
                    <th>Hourly</th>
                    <td><input name="hourly" /></td>
                </tr>
            <table/>
                <div class="text-center">
                <a href="/fleet">Go back</a>
                </div>
        </div>

    </div>
</div>
<div>   </div>
<button type="submit" class="btn btn-primary">Add</button>
</form>
<form name ="userinput" action="/fleet/detail/submit/" method="POST">
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            {error}

            <table class="table table-default" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <td>{id}<input type="hidden" name="id" value="{id}"></td>
                </tr>
                <tr>
                    <th>Plane Name</th>
                    <td><input name="planeName" value="{planeName}"/></td>
                </tr>
                <tr>
                    <th>Manufacturer</th>
                    <td><input name="manufacturer" value="{manufacturer}"/></td>
                </tr>
                <tr>
                    <th>Model</th>
                    <td><input name="model" value="{model}"/></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input name="price" value="{price}"/></td>
                </tr>
                <tr>
                    <th>Seats</th>
                    <td><input name="seats" value="{seats}"/></td>
                </tr>
                <tr>
                    <th>Reach</th>
                    <td><input name="reach" value="{reach}"/></td>
                </tr>
                <tr>
                    <th>Cruise</th>
                    <td><input name="cruise" value="{cruise}"/></td>
                </tr>
                <tr>
                    <th>Takeoff</th>
                    <td><input name="takeoff" value="{takeoff}"/></td>
                </tr>
                <tr>
                    <th>Hourly</th>
                    <td><input name="hourly" value="{hourly}"/></td>
                </tr>
            <table/>
                <div class="text-center">
                <a href="/fleet">Go back</a>
                </div>
        </div>

    </div>
</div>
<div>   </div>
{editButton}
</form>
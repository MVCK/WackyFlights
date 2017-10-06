<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-map-marker"></i>
                </div>
                <div class="mr-5">
                    Base Airport<br/> YPK Pitt Meadows
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                    {airports}
                        {community} {id}
                    {/airports}
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">Flights to {airportcount} Airports</span>
              </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-plane"></i>
                </div>
                <div class="mr-5">
                    {flights}
                        {departureAirport} to {arrivalAirport} <br/>
                    {/flights}
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">{flightcount} flights a day</span>
              </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-area-chart"></i>
                </div>
                <div class="mr-5">Number of bookings!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
    </div>
</div>
<!-- TODO Add financials
<div class="row">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        <canvas id="myBarChart" width="100" height="50"></canvas>
                    </div>
                    <div class="col-sm-4 text-center my-auto">
                        <div class="h4 mb-0 text-primary">$34,693</div>
                        <div class="small text-muted">YTD Revenue</div>
                        <hr>
                        <div class="h4 mb-0 text-warning">$18,474</div>
                        <div class="small text-muted">YTD Expenses</div>
                        <hr>
                        <div class="h4 mb-0 text-success">$16,219</div>
                        <div class="small text-muted">YTD Margin</div>
                    </div>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
</div>-->

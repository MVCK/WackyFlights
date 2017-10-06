
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Airplanes in our fleet</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id<th>
                    <th>Plane Name</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    {airplanes}
                    <tr>
                        <td>{id}</td>
                        <td>{planeName}</td>
                        <td>{manufacturer}</td>
                        <td>{model}</td>
                        <td><a class="btn btn-primary" href="/fleet/detail/{id}">Detail</a></td>
                    </tr>
                    {/airplanes}
                </tbody>
            </table>
        </div>
    </div>

</div>
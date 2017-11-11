<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
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
{addButton}
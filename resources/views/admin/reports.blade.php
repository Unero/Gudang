@include('layouts.master')

<!-- /.navbar -->
@include('layouts.header')

<!-- Main Sidebar Container -->
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Reports</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Report</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- COLOR PALETTE -->
            <div class="card">
                <div class="card-body">
                    <h5>Total Parking - Report</h5>
                    <div id="bar-chart" style="height: 300px;"></div>
                </div>

            </div>

            <div class="card">
                <div class="card-body">
                    <h5>Total Paid Orders - Report Data</h5>
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Month - Year</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>2020-01</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-02</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-03</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-04</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-05</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-06</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-07</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-08</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-09</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-10</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-11</td>
                                <td>&#36; 0</td>
                            </tr>
                            <tr>
                                <td>2020-12</td>
                                <td>&#36; 0</td>
                            </tr>

                        </tbody>
                        <tbody>
                            <tr>
                                <th>Total Amount</th>
                                <th>
                                    0 </th>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

<script>
    var bar_data = {
        data: [
            [1, 10],
            [2, 8],
            [3, 4],
            [4, 13],
            [5, 17],
            [6, 9],
            [7, 11],
            [8, 8],
            [9, 13],
            [10, 15],
            [11, 17],
            [12, 20]
        ],
        bars: {
            show: true
        }
    }
    $.plot('#bar-chart', [bar_data], {
        grid: {
            borderWidth: 1,
            borderColor: '#f3f3f3',
            tickColor: '#f3f3f3'
        },
        series: {
            bars: {
                show: true,
                barWidth: 0.5,
                align: 'center',
            },
        },
        colors: ['#3c8dbc'],
        xaxis: {
            ticks: [
                [1, 'January'],
                [2, 'February'],
                [3, 'March'],
                [4, 'April'],
                [5, 'May'],
                [6, 'June'],
                [7, 'July'],
                [8, 'August'],
                [9, 'September'],
                [10, 'October'],
                [11, 'November'],
                [12, 'December']
            ]
        }
    })

</script>

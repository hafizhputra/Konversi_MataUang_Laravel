<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- boostrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- batas boostrap 5  --}}

    {{-- data tables --}}
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    {{-- batas data tables --}}

    <!-- Styles css -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <title>Data</title>
</head>
<body>

    <section id="home" class="home" >



        <div class="container">


            <div class="card-body">
            <h2 class="text-center"> konversi mata uang </h2>
            </div>

            <a href="{{ url('create') }}" class="btn btn-success btn-sm" title="Add New Student">
                + tambah
                </a>

            <div class="table-home">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Currency from</th>
                            <th>Amount</th>
                            <th>Currency to</th>
                            <th>Converted amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                         @endphp
                        @foreach ( $dtConvert as $item )

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->currency_from }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->currency_to }}</td>
                            <td>{{ $item->converted_amount }}</td>
                            @if ($item->status == '1')
                            <td> <p style="color: yellow; text-shadow:1px 1px 1px  black">Belum dikonversi</p></td>
                             @elseif($item->status == '2')
                             <td class="text-success">dikonversi</td>
                             @endif


                            <td>
                            <a style="text-decoration: none;" href="{{ url('konversi',$item->id) }}">konversi</a>
                            <a href="{{ url('edit',$item->id) }}"><i class="bi bi-pencil-square"></i></i></a>
                            <a href="{{ url('delete',$item->id) }}"><i class="bi bi-trash"></i></a>
                            </td>


                        </tr>

                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Currency from</th>
                            <th>Amount</th>
                            <th>Currency to</th>
                            <th>Converted amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>


        </div>
    </section>



    {{-- data table --}}
  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>
  {{-- batas data table --}}

</body>
</html>

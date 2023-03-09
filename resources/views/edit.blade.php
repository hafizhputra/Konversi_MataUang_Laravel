<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- boostrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- batas boostrap 5  --}}

      <!-- Styles css -->
      <link href="{{ asset('css/create.css') }}" rel="stylesheet">

    <title>edit</title>
</head>
<body>

    <div class="container">


            <div class="card-body">
                <h2>Edit Data</h2>
                <a href="{{ url('home') }}" class="btn btn-success btn-sm mt-2" title="Add New Student">
                    kembali
                    </a>
            </div>

        <div class="card-body">
            <form action="{{ route('update',$editdata->id) }}" method="post">
              {{ csrf_field() }}
              <div class="row mb-4">

                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form7Example1">Amount</label>
                    <input type="text" id="amount" name="amount"  class="form-control"  min = "0" value="{{ $editdata->amount }}"  />

                  </div>
                </div>

                <div class="col">
                  <div class="form-outline from-currency">
                    <label class="form-label" for="">currency from</label>
                    <select class="form-select" id="currency_from" name="currency_from" >
                        {{-- <option>sdfsdfsdfsf</option> --}}
                    </select>
                  </div>
                </div>


                <div class="col">
                    <div class="form-outline to-currency">
                      <label class="form-label" for="">currency to</label>
                      <select class="form-select" id="currency_to" name="currency_to" >
                          {{-- <option>USD</option> --}}
                      </select>
                    </div>
                  </div>

               <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">simpan data</button>
               </div>

              </div>


            </form>
          </div>

    </div>

<!-- js file -->
<script src = "{{ asset('js/scriptEdit.js') }}"></script>
</body>
</html>

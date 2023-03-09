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

    <title>currency converter</title>
</head>
<body>

    <div class="container">


            <div class="card-body">
                <h2>CURRENCY CONVERTER</h2>
                <a href="{{ url('home') }}" class="btn btn-success btn-sm mt-2" title="Add New Student">
                    kembali
                    </a>
            </div>

        <div class="card-body">
            <form action="{{ route('updkonversi',$kvs->id) }}" method="post" >
              {{ csrf_field() }}
              <div class="row mb-4">

                <div class="col">
                  <div class="form-outline from-amount">
                    <label class="form-label" for="form7Example1">Amount</label>
                    <input type="text" id="amount" readonly="readonly" name="amount"  class="form-control"  min = "0" value="{{ $kvs->amount }}"  />

                  </div>
                </div>

                <div class="col">
                  <div class="form-outline from-currency">

                    <label class="form-label" for="">currency from</label>
                    <input type="text" id="currency_from" readonly="readonly" name="currency_from"  class="form-control"  min = "0" value="{{ $kvs->currency_from}}"  />

                  </div>
                </div>


                <div class="col">
                    <div class="form-outline to-currency ">

                      <label class="form-label" for="">currency to</label>
                      <input type="text" id="currency_to" readonly="readonly" name="currency_to"  class="form-control"  min = "0" value="{{ $kvs->currency_to}}"  />


                    </div>
                  </div>






               <!-- converted result -->
            <div class = "result-wrapper mt-3">
                <p>
                    <span id ="from-result"></span>
                    =

                    <span id ="converted_amount" >
                   </span>
                   <input type="hidden" id="id-input" name="converted_amount" >


                </p>

            </div>




               <div class="form-group mt-3">
                <button type = "button" id = "convert-btn" class="btn btn-warning">convert</button>

                <button type="submit" class="btn btn-success">simpan data</button>

               </div>

              </div>


            </form>
          </div>

    </div>

<!-- js file -->
<script src = "{{ asset('js/scriptConvert.js') }}"></script>

</body>
</html>

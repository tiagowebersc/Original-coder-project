@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/foodtruckinfo.css')}}" />
{{-- Source for FONT : https://fonts.google.com --}}
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400&display=swap" rel="stylesheet">
{{-- Source for FONT : https://fonts.google.com --}}
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap" rel="stylesheet">
{{-- Source for FONT : https://fonts.google.com --}}
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('title', 'SnackHound - FoodTruck Info')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
      </button>


    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Your lunchbag</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Added (<span id='lunchQt'>1</span>x) $menu->name to your lunchbag
            </div>

          </div>
        </div>
      </div>


@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

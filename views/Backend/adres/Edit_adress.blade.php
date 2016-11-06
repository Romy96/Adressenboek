@extends('Backend/menu')


@section('content_backend')

@if(isset($adres))
<form role="form" method="post" action="Edit_adress_action.php">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">   <!-- white background -->

                    <div class="box-body">      <!-- some whitespace -->
                        <div class="box-body">      <!-- some more whitespace -->
                                <div class='form-group'>
                                	<input type="hidden" name="id" value="{{$adres['ID']}}">
                                    <label for="naam">Naam eigenaar of bedrijf:</label>
                                    <input class="form-control" data-slug="source" placeholder="naam" name="naam" type="text" id="naam" value="{{$adres['Name']}}">
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email adres:</label>
                                    <input type="email" class="form-control" data-slug="source" placeholder="Email" id="Email" name="Email" value="{{$adres['Email_adress']}}">
                                </div>

                                <div class="form-group">
                                    <label for="Home">Huisadres:</label>
                                    <input type="text" class="form-control" data-slug="source" placeholder="Huisadres" id="Home" name="Home" value="{{$adres['Home_adress']}}">
                                </div>

                                <div class='form-group'>
                                    <label for="Zip">Postcode:</label>
                                    <input class="form-control" data-slug="source" placeholder="postcode" name="Zip" type="text" id="Zip" value="{{$adres['Zip_code']}}">
                                </div>
                        </div>  <!-- /box-body -->
                    </div>      <!-- /box-body -->
                    <div class="box-footer">
                        <button type="submit" type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-flat">Opslaan</button>
                    </div>
                </div>      <!-- /nav-tabs-custom -->
            </div>      <!-- /col-md-12 -->
        </div>      <!-- /row -->
    </form>
@endif

@endsection
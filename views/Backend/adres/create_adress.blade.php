@extends('Backend/menu')


@section('content_backend')

<form role="form" method="post" action="create_adress_action.php">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">   <!-- white background -->

                    <div class="box-body">      <!-- some whitespace -->
                        <div class="box-body">      <!-- some more whitespace -->
                                <div class='form-group'>
                                    <label for="naam">Naam eigenaar of bedrijf:</label>
                                    <input class="form-control" data-slug="source" placeholder="naam" name="naam" type="text" id="naam">
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email adres:</label>
                                    <input type="email" class="form-control" data-slug="source" placeholder="Email" id="Email" name="Email">
                                </div>

                                <div class="form-group">
                                    <label for="Home">Huisadres:</label>
                                    <input type="text" class="form-control" data-slug="source" placeholder="Huisadres" id="Home" name="Home">
                                </div>

                                <div class='form-group'>
                                    <label for="Zip">Postcode:</label>
                                    <input class="form-control" data-slug="source" placeholder="postcode" name="Zip" type="text" id="Zip">
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

@endsection
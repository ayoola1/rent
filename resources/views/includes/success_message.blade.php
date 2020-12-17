
@if(Session::has('the_errors'))

  <div class="alert alert-warning  alert-dismissable">
       
       <button type="button" class="close" data-dismiss="alert">&times;</button>

       <p>{{Session('the_errors')}}</p>

  </div>

@endif


@if(Session::has('the_user'))

  <div class="alert alert-success  alert-dismissable">
       
       <button type="button" class="close" data-dismiss="alert">&times;</button>

       <p>{{session('the_user')}}</p>

  </div>

@endif
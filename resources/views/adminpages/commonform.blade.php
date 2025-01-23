@extends('admin')

@section('content')


@if (session('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger mt-3" role="alert">
    {{ session('error') }}
</div>
@endif


<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">{{$formname}}</h3>
            </div>
            <div class="card-body">

                <form action="{{route($formactionroute)}}" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <table class="table table-sm table-borderless">
                        <tbody>
                            @foreach($formfields as $formfield)
                            <tr>
                                <th width="120px" scope="row">{{$formfield['name']}}</th>
                                @if($formfield['type'] == 'string')
                                <td><input type="text" class="form-control" name="{{$formfield['name']}}" value="{{$formfield['value']}}"></td>
                                @elseif($formfield['type'] == 'textarea')
                                <td>
                                    <textarea name="{{$formfield['name']}}" id="content1" class="form-control" rows="10" value="{{$formfield['value']}}"></textarea>
                                </td>
                                @elseif($formfield['type'] == 'radio')
                                <td>
                                    <input type="radio" name="{{$formfield['name']}}" value="1" {{ $formfield['value'] == 1 ? 'checked' : '' }}> Ya 
                                    <input type="radio" name="{{$formfield['name']}}" value="0" {{ $formfield['value'] == 0 ? 'checked' : '' }}> Tidak
                                </td>
                                @elseif($formfield['type'] == 'file')
                                <td>
                                    <input type="file" class="form-control" name="{{$formfield['name']}}"><small><i>* max Upload <b style="color:red">3MB</b></i></small>
                                    if($formfield['value'] != '')
                                    <p>current file = {{$formfield['value']}}</p>
                                </td>
                                @elseif($formfield['type'] == 'option')
                                <td><select name="{{$formfield['name']}}" class="form-control" required="">
                                        @foreach($formfield['options'] as $option)
                                        <option value="{{$option['value']}}">{{$option['name']}}</option>
                                        @endforeach
                                    </select></td>
                                @endif
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-info">Enter</button>
                        <a href="{{ url()->previous() }}"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection
@extends('admin.tamplate.layout')
@section('content')
@section('title_content', 'Resume')
@section('resume', 'active')


{{-- {{ dd($res_data) }} --}}
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Resume</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Category
                </th>
                <th>
                  Title
                </th>
                <th>
                  Descriptions
                </th>
                <th>
                  Learn
                </th>
                <th>
                  Year In
                </th>
                <th>
                  Year Out
                </th>
                <th>
                  Place
                </th>
              </thead>
              <tbody>
                @foreach ($res_data as $resume)
                  <tr>
                    <td>
                      {{ $resume['id'] }}
                    </td>
                    <td>
                      {{ $resume['category'] }}
                    </td>
                    <td>
                      {{ $resume['title'] }}
                    </td>
                    <td>
                      {{ $resume['desc'] }}
                    </td>
                    <td>
                      {{ $resume['learn'] }}
                    </td>
                    <td>
                      {{ $resume['year_in'] }}
                    </td>
                    <td>
                      {{ $resume['year_out'] }}
                    </td>
                    <td>
                      {{ $resume['place'] }}
                    </td>
                    <td>
                      <button class="btn btn-primary"><i class="nc-icon nc-settings-gear-65"></i></button>
                      <button class="btn btn-danger"><i class="nc-icon nc-simple-remove"></i></button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="">File</label>
                              <input type="file" class="form-control mt-2 mb-2" id="" name="file">
                              @error('file')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                          </form>
                    </div>
                </div>

                <table>
                    <tbody>
                        @foreach ($files as $file)
                            <td>
                                <img style="width: 100px; height: 100px" src="{{ asset($file->file_path) }}" alt="">
                            </td>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <table>
                    <tbody>
                        @foreach ($files as $file)
                            <td>
                                <a href="{{ route('file.download') }}">Download File</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection

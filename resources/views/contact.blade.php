@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-primary mt-2" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="" name="email" value="{{ old('email') }}">
                              </div>
                              <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" id="" name="subject" value="{{ old('subject') }}">
                              </div>
                              <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="message" id="" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
                              </div>
                            <button type="submit" class="btn btn-primary mt-1">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('update', $registers->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}

        @if ($success = Session::get('success'))
            <div class="alert alert-success">
                {{ $success }}
            </div>
        @endif
        <div class="container">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $registers->name }}">
                <span class="text-danger">
                    @error('name')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text " name="email" id="" class="form-control"
                    value="{{ $registers->email }}">
                <span class="text-danger">
                    @error('email')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control"
                    value="{{ $registers->password }}">
                <span class="text-danger">
                    @error('password')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            {{-- <div class="form-group">
                <label for=""> Confirm Password</label>
                <input type="password" name="password_confirmation" id="" class="form-control">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{ $success }}
                    @enderror
                </span>
            </div> --}}
            <div class="form-group">
                <label for="">Start Date</label>
                <input type="Date" name="startdate" id="" class="form-control"
                    value="{{ $registers->startdate }}">
                <span class="text-danger">
                    @error('startdate')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">End Date</label>
                <input type="Date" name="enddate" id="" class="form-control"
                    value="{{ $registers->enddate }}">
                <span class="text-danger">
                    @error('enddate')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">File Upload</label>
                <input type="file" name="filename" id="" class="form-control"
                    value="{{ $registers->filename }}">
                <span class="text-danger">
                    @error('filename')
                        {{ $success }}
                    @enderror
                </span>
            </div>
            <br>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>
    @if (isset($data))
        @foreach ($data as $item)
            <li> {{ $item }}</li>
        @endforeach
    @endif
    </table>
</body>

</html>

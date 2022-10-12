<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Contact Form Package</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h3>Laravel Contact Form Package</h3>
    <hr />
    <form action="{{ route('contact.store') }}" class="mt-5" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Name:</label>
                <input type="text" 
                    class="form-control" 
                    id="name" 
                    placeholder="Enter name"
                    value="{{ old('name') }}"
                    name="name">
                    @if($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
            </div>
            <div class="col">
                <label for="contact_number" class="form-label">Contact Number:</label>
                <input type="number" 
                    class="form-control" 
                    id="contact_number" 
                    placeholder="Enter contact number" 
                    value="{{ old('contact_number') }}"
                    name="contact_number">
                @if($errors->has('contact_number'))
                    <div class="text-danger">{{ $errors->first('contact_number') }}</div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="email" class="form-label">Email:</label>
                <input type="email" 
                    class="form-control" 
                    id="email" 
                    placeholder="Enter email" 
                    value="{{ old('email') }}"
                    name="email" />
                @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="col">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" 
                    class="form-control" 
                    id="subject" 
                    placeholder="Enter subject" 
                    value="{{ old('subject') }}"
                    name="subject" />
                @if($errors->has('subject'))
                    <div class="text-danger">{{ $errors->first('subject') }}</div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="inquiry" class="form-label">Inquiry</label>
                <textarea 
                    class="form-control" 
                    id="inquiry" 
                    placeholder="Enter Inquiry" 
                    name="inquiry">{{ old('inquiry') }}</textarea>
                @if($errors->has('inquiry'))
                    <div class="text-danger">{{ $errors->first('inquiry') }}</div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

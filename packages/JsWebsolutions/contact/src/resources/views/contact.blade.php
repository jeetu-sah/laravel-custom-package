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
    <form action="/action_page.php" class="mt-5">
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Name:</label>
                <input type="text" 
                    class="form-control" 
                    id="name" 
                    placeholder="Enter name" 
                    name="name">
            </div>
            <div class="col">
                <label for="contact_number" class="form-label">Contact Number:</label>
                <input type="number" 
                    class="form-control" 
                    id="contact_number" 
                    placeholder="Enter contact number" 
                    name="contact_number">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="email" class="form-label">Email:</label>
                <input type="email" 
                    class="form-control" 
                    id="email" 
                    placeholder="Enter email" 
                    name="email" />
            </div>
            <div class="col">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" 
                    class="form-control" 
                    id="subject" 
                    placeholder="Enter subject" 
                    name="subject" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="inquiry" class="form-label">Inquiry</label>
                <textarea 
                    class="form-control" 
                    id="inquiry" 
                    placeholder="Enter Inquiry" 
                    name="inquiry"></textarea>
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

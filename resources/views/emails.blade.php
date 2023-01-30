<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Furlenco - Email Templates</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <style type="text/css">a{text-decoration:none;}</style>
    </head>
    <body>
        <div class="container-fluid p-5">
            <table class="table">
                <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                @foreach ($emails as $key => $email)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{ucwords($email)}} Email</td>
                    <td>
                        <a href="{{config('app.url')}}/email/{{$email}}" target="_blank">
                            <button class="btn btn-primary">View</button>
                        </a>
                        <button class="btn btn-success" onclick="sendEmail('{{$email}}', this)">Send Email</button>
                        <button class="btn btn-success" onclick="generateEmailFile('{{$email}}', this)">Generate HTML</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
    <script>
        function sendEmail(email, e) {
            $(e).attr('disabled', true);
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: 'sendEmail',
                data: {email: email},
                success: function(data) {
                    $(e).attr('disabled', false);
                }
            });
        }

        function generateEmailFile(email, e) {
            $(e).attr('disabled', true);
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: 'generateEmailFile',
                data: {email: email},
                success: function(data) {
                    $(e).attr('disabled', false);
                }
            });
        }
    </script>
</html>

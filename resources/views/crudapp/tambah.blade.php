<!DOCTYPE html>
<html>
    <head>
        <title>Membuat CRUD sederhana menggunakan Laravel 9</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
 
    </head>
    <body>
        <div>
            <h1>Membuat CRUD sederhana menggunakan Laravel 9</h1>
            <h3>Afrizal's Blog</h3>
        </div>
        <br/>
        <br/>
        <div class="container">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <table style="margin:20px auto;">
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" value="{{ old('name') }}">
                            <br>
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <textarea id="w3review" name="email" rows="4" cols="50">{{ old('email') }}</textarea>
                            <br>
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>
                            <input type="text" name="phone" value="{{ old('phone') }}">
                            <br>
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td>
                            <input type="text" name="company" value="{{ old('company') }}">
                            <br>
                            <small class="text-danger">{{ $errors->first('company') }}</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Industry</td>
                        <td>
                            <input type="text" name="industry" value="{{ old('industry') }}">
                            <br>
                            <small class="text-danger">{{ $errors->first('industry') }}</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>
                            <input type="text" name="message" value="{{ old('message') }}">
                            <br>
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        </td>
                    </tr>
                    <td></td>
                    <td><input type="button" onclick="window.history.back()" value="kembali"></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script
        type="text/javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script
        type="text/javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
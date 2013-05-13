@section('content')
    {{-- Controls block --}}
    <div class="row-fluid controls">
        
        <div class="span12">

            <a href="#" class="btn btn-small btn-primary">Add new user</a>

            <a href="#" class="btn btn-small btn-danger">Delete selected users</a>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span12">

            <table id="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Modified</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
            </table>

        </div>

    </div>
    <!-- /.row-fluid -->

@endsection

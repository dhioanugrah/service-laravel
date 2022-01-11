<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Contacts</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="pnale panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            ALL Contacts
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/" class="btn btn-info pull-right">Home</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-succes" role="alert">
                                        {{Session::get('message')}}
                                    </div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $c)
                                            <tr>
                                                <td>{{$c->id}}</td>
                                                <td>{{$c->name}}</td>
                                                <td>{{$c->email}}</td>
                                                <td>{{$c->phone}}</td>
                                                <td>{{$c->message}}</td>
                                                <td>{{$c->created_at}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$contacts->links()}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@extends('layouts.admin.layout.master')
@section('titleKey','Mail')
@section('content')


<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Inbox</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-envelope"></i> 5 messages (3 unread)</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">

                            <div class="table-responsible">
                                <table class="table table-condensed table-hover table-bordered table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="min-width:320px">Message details</th>
                                            <th style="min-width:180px">Sender details</th>
                                            <th style="min-width:100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5><span class="text-danger"><b>[Unread]</b></span> <a href="#"><b>I want your help please</b></a></h5>
                                                <p>June 04 2018, 13:15</p>
                                                <p>Lorem ipsum dolor sit amet, probo omnis fugit vis in. Tale summo quaeque vim eu, pro sumo omnium at. Ad illud facilisi vix, nostrud dolores expetenda id vim. Et affert constituto percipitur qui...</p>
                                            </td>

                                            <td>
                                                <div class="mail_list">
                                                <img alt="image " class="img-fluid d-none d-lg-block " src="assets/images/avatars/avatar_small.png" />
                                                </div> 
                                                <p>John Elvis Doe</p>
                                            </td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-search"></i> Read</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5><span class="text-danger"><b>[Unread]</b></span> <a href="#"><b>I want your help please</b></a></h5>
                                                <p>June 04 2018, 13:15</p>
                                                <p>Lorem ipsum dolor sit amet, probo omnis fugit vis in. Tale summo quaeque vim eu, pro sumo omnium at. Ad illud facilisi vix, nostrud dolores expetenda id vim. Et affert constituto percipitur qui...</p>
                                            </td>

                                            <td>
                                                <div class="mail_list">
                                                    <img alt="image " class="img-fluid d-none d-lg-block " src="assets/images/avatars/avatar_small.png" />
                                                    </div> 
                                                    <p>John Elvis Doe</p>
                                            </td>

                                            <td>
                                                <a href="# " class="btn btn-primary btn-sm btn-block "><i class="fas fa-search "></i> Read</a>
                                                <a href="# " class="btn btn-danger btn-sm btn-block mt-2 "><i class="fas fa-trash "></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5><span class="text-danger "><b>[Unread]</b></span> <a href="# "><b>I want your help please</b></a></h5>
                                                <p>June 04 2018, 13:15</p>
                                                <p>Lorem ipsum dolor sit amet, probo omnis fugit vis in. Tale summo quaeque vim eu, pro sumo omnium at. Ad illud facilisi vix, nostrud dolores expetenda id vim. Et affert constituto percipitur qui...</p>
                                            </td>

                                            <td>
                                                <div class="mail_list">
                                                    <img alt="image " class="img-fluid d-none d-lg-block " src="assets/images/avatars/avatar_small.png" />
                                                </div>
                                                <p>John Elvis Doe</p>
                                            </td>

                                            <td>
                                                <a href="# " class="btn btn-primary btn-sm btn-block "><i class="fas fa-search "></i> Read</a>
                                                <a href="# " class="btn btn-danger btn-sm btn-block mt-2 "><i class="fas fa-trash "></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <h5><a href="# ">Test message subject</a></h5>
                                                <p>June 04 2018, 13:15</p>
                                                <p>Lorem ipsum dolor sit amet, probo omnis fugit vis in. Tale summo quaeque vim eu, pro sumo omnium at. Ad illud facilisi vix, nostrud dolores expetenda id vim. Et affert constituto percipitur qui...</p>
                                            </td>

                                            <td>
                                                <div class="mail_list">
                                                    <img alt="image " class="img-fluid d-none d-lg-block " src="assets/images/avatars/avatar_small.png" />
                                                </div>
                                                <p>John Elvis Doe</p>
                                            </td>

                                            <td>
                                                <a href="# " class="btn btn-primary btn-sm btn-block "><i class="fas fa-search "></i> Read</a>
                                                <a href="# " class="btn btn-danger btn-sm btn-block mt-2 "><i class="fas fa-trash "></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <h5><a href="# ">Test message subject</a></h5>
                                                <p>June 04 2018, 13:15</p>
                                                <p>Lorem ipsum dolor sit amet, probo omnis fugit vis in. Tale summo quaeque vim eu, pro sumo omnium at. Ad illud facilisi vix, nostrud dolores expetenda id vim. Et affert constituto percipitur qui...</p>
                                            </td>

                                            <td>
                                                <div class="mail_list">
                                                    <img alt="image " class="img-fluid d-none d-lg-block " src="assets/images/avatars/avatar_small.png" />
                                                </div>
                                                <p>John Elvis Doe</p>
                                            </td>

                                            <td>
                                                <a href="# " class="btn btn-primary btn-sm btn-block "><i class="fas fa-search "></i> Read</a>
                                                <a href="# " class="btn btn-danger btn-sm btn-block mt-2 "><i class="fas fa-trash "></i> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- END container-fluid -->
    </div>
    <!-- END content -->
</div>
<!-- END content-page -->
@endsection
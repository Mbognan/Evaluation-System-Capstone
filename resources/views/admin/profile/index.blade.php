@extends('admin.layouts.master')

@section('contents')
    <div class="page-heading">
        <h1 class="page-title">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Profile</li>
        </ol>
    </div>


    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            <img class="img-circle" src="{{ $user->avatar }}" />
                        </div>
                        <h5 class="font-strong m-b-10 m-t-10">{{ $user->name }} {{ $user->last_name }}</h5>
                        <div class="m-b-20 text-muted">Administrator</div>
                        <div class="profile-social m-b-20">
                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-md-8">
                <div class="ibox">
                    <div class="ibox-body">
                        <!-- Tab BAR-->
                        <ul class="nav nav-tabs tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i>
                                    Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Update
                                    Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="#tab-3" data-toggle="tab"><i
                                        class="ti-alert text-danger"></i> Change Password</a>
                            </li>
                        </ul>


                        <!-- Tab CONTENT-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1">
                                {{-- <div class="row">
                                <div class="col-md-6" style="border-right: 1px solid #eee;">
                                    <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month Statistics</h5>
                                    <div class="h2 m-0">$12,400<sup>.60</sup></div>
                                    <div><small>Month income</small></div>
                                    <div class="m-t-20 m-b-20">
                                        <div class="h4 m-0">120</div>
                                        <div class="d-flex justify-content-between"><small>Month income</small>
                                            <span class="text-success font-12"><i class="fa fa-level-up"></i> +24%</span>
                                        </div>
                                        <div class="progress m-t-5">
                                            <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="m-b-20">
                                        <div class="h4 m-0">86</div>
                                        <div class="d-flex justify-content-between"><small>Month income</small>
                                            <span class="text-warning font-12"><i class="fa fa-level-down"></i> -12%</span>
                                        </div>
                                        <div class="progress m-t-5">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-full list-group-divider">
                                        <li class="list-group-item">Projects
                                            <span class="pull-right color-orange">15</span>
                                        </li>
                                        <li class="list-group-item">Tasks
                                            <span class="pull-right color-orange">148</span>
                                        </li>
                                        <li class="list-group-item">Articles
                                            <span class="pull-right color-orange">72</span>
                                        </li>
                                        <li class="list-group-item">Friends
                                            <span class="pull-right color-orange">44</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest Followers</h5>
                                    <ul class="media-list media-list-divider m-0">
                                        <li class="media">
                                            <a class="media-img" href="javascript:;">
                                                <img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                                            </a>
                                            <div class="media-body">
                                                <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="media-img" href="javascript:;">
                                                <img class="img-circle" src="./assets/img/users/u2.jpg" width="40" />
                                            </a>
                                            <div class="media-body">
                                                <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="media-img" href="javascript:;">
                                                <img class="img-circle" src="./assets/img/users/u3.jpg" width="40" />
                                            </a>
                                            <div class="media-body">
                                                <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="media-img" href="javascript:;">
                                                <img class="img-circle" src="./assets/img/users/u6.jpg" width="40" />
                                            </a>
                                            <div class="media-body">
                                                <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="media-img" href="javascript:;">
                                                <img class="img-circle" src="./assets/img/users/u5.jpg" width="40" />
                                            </a>
                                            <div class="media-body">
                                                <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i> Latest Orders</h4>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th width="91px">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11</td>
                                        <td>@Jack</td>
                                        <td>$564.00</td>
                                        <td>
                                            <span class="badge badge-success">Shipped</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>@Amalia</td>
                                        <td>$220.60</td>
                                        <td>
                                            <span class="badge badge-success">Shipped</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>@Emma</td>
                                        <td>$760.00</td>
                                        <td>
                                            <span class="badge badge-default">Pending</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>@James</td>
                                        <td>$87.60</td>
                                        <td>
                                            <span class="badge badge-warning">Expired</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>@Ava</td>
                                        <td>$430.50</td>
                                        <td>
                                            <span class="badge badge-default">Pending</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>@Noah</td>
                                        <td>$64.00</td>
                                        <td>
                                            <span class="badge badge-success">Shipped</span>
                                        </td>
                                        <td>10/07/2017</td>
                                    </tr>
                                </tbody>
                            </table> --}}
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <form action="{{ route('admin.profile.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div id="image-preview" class="avatar-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="avatar" id="image-upload" />
                                                <input type="hidden" name="oldAvatar" value="{{ $user->avatar }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>First Name<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="First Name"
                                                name="name" value="{{ $user->name }}">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Last Name"
                                                name="last_name" value="{{ $user->last_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Email address"
                                            name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </form>


                            </div>

                            <div class="tab-pane fade" id="tab-3">
                                <h5 class="text-info m-b-20 m-t-20 text-warning"><i class="ti-alert text-warning"></i>
                                    Warning!</h5>
                                <form action="{{ route('admin.profile.reset_password') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <p class=""> Ensure your account is using a long, random password to stay secure!
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label class="text-danger">Current Password</label>
                                            <input class="form-control" type="password" placeholder="Current Password"
                                                name="current_password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label class="text-danger">New Password</label>
                                            <input class="form-control" type="password" placeholder="New Password "
                                                name="password">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-danger">Confirm Password</label>
                                            <input class="form-control" type="password" placeholder="Confirm Password "
                                                name="password_confirmation">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" type="submit">Change Password</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .profile-social a {
                font-size: 16px;
                margin: 0 10px;
                color: #999;
            }

            .profile-social a:hover {
                color: #485b6f;
            }

            .profile-stat-count {
                font-size: 22px
            }

            #image-preview {
                width: 200px;
                height: 200px;
                position: relative;
                overflow: hidden;
                background-color: #ffffff;
                color: #ecf0f1;
            }

            #image-preview input {
                line-height: 100px;
                font-size: 100px;
                position: absolute;
                opacity: 0;
                z-index: 10;
            }

            #image-preview label {
                position: absolute;
                z-index: 5;
                opacity: 0.8;
                cursor: pointer;
                background-color: #bdc3c7;
                width: 100px;
                height: 50px;
                font-size: 20px;
                line-height: 50px;
                text-transform: uppercase;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                text-align: center;
            }
        </style>
        @push('scripts')
            <script>
                (function($) {
                    $.extend({
                        uploadPreview: function(options) {

                            // Options + Defaults
                            var settings = $.extend({
                                input_field: ".image-input",
                                preview_box: ".image-preview",
                                label_field: ".image-label",
                                label_default: "Choose File",
                                label_selected: "Change File",
                                no_label: false,
                                success_callback: null,
                            }, options);

                            // Check if FileReader is available
                            if (window.File && window.FileList && window.FileReader) {
                                if (typeof($(settings.input_field)) !== 'undefined' && $(settings.input_field) !==
                                    null) {
                                    $(settings.input_field).change(function() {
                                        var files = this.files;

                                        if (files.length > 0) {
                                            var file = files[0];
                                            var reader = new FileReader();

                                            // Load file
                                            reader.addEventListener("load", function(event) {
                                                var loadedFile = event.target;

                                                // Check format
                                                if (file.type.match('image')) {
                                                    // Image
                                                    $(settings.preview_box).css("background-image",
                                                        "url(" + loadedFile.result + ")");
                                                    $(settings.preview_box).css("background-size",
                                                        "cover");
                                                    $(settings.preview_box).css(
                                                        "background-position", "center center");
                                                } else if (file.type.match('audio')) {
                                                    // Audio
                                                    $(settings.preview_box).html(
                                                        "<audio controls><source src='" +
                                                        loadedFile.result + "' type='" + file
                                                        .type +
                                                        "' />Your browser does not support the audio element.</audio>"
                                                        );
                                                } else {
                                                    alert("This file type is not supported yet.");
                                                }
                                            });

                                            if (settings.no_label == false) {
                                                // Change label
                                                $(settings.label_field).html(settings.label_selected);
                                            }

                                            // Read the file
                                            reader.readAsDataURL(file);

                                            // Success callback function call
                                            if (settings.success_callback) {
                                                settings.success_callback();
                                            }
                                        } else {
                                            if (settings.no_label == false) {
                                                // Change label
                                                $(settings.label_field).html(settings.label_default);
                                            }

                                            // Clear background
                                            $(settings.preview_box).css("background-image", "none");

                                            // Remove Audio
                                            $(settings.preview_box + " audio").remove();
                                        }
                                    });
                                }
                            } else {
                                alert("You need a browser with file reader support, to use this form properly.");
                                return false;
                            }
                        }
                    });
                })(jQuery);


                $(document).ready(function() {
                    let avatarUri = "{{ asset($user->avatar) }}"
                    $('.avatar-preview').css({
                        'background-image': 'url(' + avatarUri + ')',
                        'background-size': 'cover',
                        'background-position': 'center center'
                    });
                });


                $.uploadPreview({
                    input_field: "#image-upload", // Default: .image-upload
                    preview_box: "#image-preview", // Default: .image-preview
                    label_field: "#image-label", // Default: .image-label
                    label_default: "Choose File", // Default: Choose File
                    label_selected: "Change File", // Default: Change File
                    no_label: false // Default: false
                });
            </script>
        @endpush
    </div>
@endsection

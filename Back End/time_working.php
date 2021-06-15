<?php include "../Include/admin_page/header_admin.php";
include "../Include/admin_page/menu_admin.php";
?>
<style>
    .table-list {
        font-weight: bold;
        text-align: center;
        font-size: 30px;
        font-family: Courier New;
    }

    .form-control {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }

    .time-date {
        color: blue;
    }

    .clock {
        width: 260px;
        margin: 0 auto;
        padding: 5px;
        font-weight: bold;
    }

    .clock ul {
        width: 300px;
    }

    .clock ul li {
        display: inline;
        font-size: 3em;
        text-align: center;
        font-family: "Arial", Helvetica, sans-serif;
    }

    #Date {
        font-family: 'Arial', Helvetica, sans-serif;
        font-size: 20px;
        text-align: center;
        padding-bottom: 20px;
    }

    #point {
        position: relative;
        -moz-animation: mymove 1s ease infinite;
        -webkit-animation: mymove 1s ease infinite;
        padding-left: 10px;
        padding-right: 10px
    }

    #sec {

        position: relative;
        -moz-animation: mymove 1s ease infinite;
        -webkit-animation: mymove 1s ease infinite;

    }

    /* Animasi Detik Kedap - Kedip */
    @-webkit-keyframes mymove {
        50% {
            opacity: 0;
            text-shadow: none;
        }

        100% {
            opacity: 1.0;
        }
    }
</style>
<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <h1 class="text-center text-danger">Record working time</h1>
                <div>
                    <div class="clock">
                        <div id="Date"></div>
                        <div class="time-date">
                            <ul>
                                <li id="hours"></li>
                                <li id="point">:</li>
                                <li id="min"></li>
                                <li id="point">:</li>
                                <li id="sec"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form align="center" action="" method="post">
                    <div class="row bg-dark">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <br><br><br>
                                <input type="text" class="form-control" placeholder="Enter your Personal code" name="id_personnal ">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-10">
                            <div class="form-group">
                                <label class="text-light">Date</label>
                                <input name="date" id="date" class="form-control" disabled>

                                <label class="text-light">Time</label>
                                <input name="time" id="Time" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <br><br><br>
                                <button class="btn btn-success btn-lg" type="submit">Time In</button>
                                <button class="btn btn-danger btn-lg" type="submit">Time Out</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Age</th>
                                <th>Office</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-plus">Gloria F. Mead</td>
                                <td>25</td>
                                <td>Sagittarius</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>25</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>18</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                <td>29-03-2018</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script>
                function clockTick() {
                    currentTime = new Date();
                    month = currentTime.getMonth() + 1;
                    day = currentTime.getDate();
                    year = currentTime.getFullYear();
                    // alert("hi");
                    var showdate = day + "/" + month + "/" + year;
                    document.getElementById("date").value = showdate;
                }

                setInterval(function() {
                    clockTick();
                }, 1000); //setInterval(clockTick, 1000); will also work

                GetTime();

                function GetTime() {
                    var CurrentTime = new Date()
                    var hour = CurrentTime.getHours()
                    var minute = CurrentTime.getMinutes()
                    var second = CurrentTime.getSeconds()

                    if (minute < 10) {
                        minute = "0" + minute
                    }

                    if (second < 10) {
                        second = "0" + second
                    }

                    var GetCurrentTime = hour + ":" + minute;

                    document.getElementById("Time").value = GetCurrentTime;
                    setTimeout(GetTime, 1000)
                }
            </script>
            <script>
                // Function which returns a minimum of two digits in case the value is less than 10
                const getTwoDigits = (value) => value < 10 ? `0${value}` : value;

                const formatDate = (date) => {
                    const year = date.getFullYear();
                    const month = getTwoDigits(date.getMonth() + 1); // add 1 since getMonth returns 0-11 for the months
                    const day = getTwoDigits(date.getDate());


                    return `${day}-${month}-${year}`;
                }

                const formatTime = (date) => {
                    const hours = getTwoDigits(date.getHours());
                    const mins = getTwoDigits(date.getMinutes());

                    return `${hours}:${mins}`;
                }

                const date = new Date();
                document.getElementById('currentDate').value = formatDate(date);
                document.getElementById('currentTime').value = formatTime(date);
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    // Making 2 variable month and day
                    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

                    // make single object
                    var newDate = new Date();
                    // make current time
                    newDate.setDate(newDate.getDate());
                    // setting date and time
                    $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

                    setInterval(function() {
                        // Create a newDate() object and extract the seconds of the current time on the visitor's
                        var seconds = new Date().getSeconds();
                        // Add a leading zero to seconds value
                        $("#sec").html((seconds < 10 ? "0" : "") + seconds);
                    }, 1000);

                    setInterval(function() {
                        // Create a newDate() object and extract the minutes of the current time on the visitor's
                        var minutes = new Date().getMinutes();
                        // Add a leading zero to the minutes value
                        $("#min").html((minutes < 10 ? "0" : "") + minutes);
                    }, 1000);

                    setInterval(function() {
                        // Create a newDate() object and extract the hours of the current time on the visitor's
                        var hours = new Date().getHours();
                        // Add a leading zero to the hours value
                        $("#hours").html((hours < 10 ? "0" : "") + hours);
                    }, 1000);
                });
            </script>

            <?php include "../Include/admin_page/footer_admin.php"; ?>